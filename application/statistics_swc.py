import re
from math import sqrt
from random import randint
import sys

from numpy import linalg as LA, array, dot
from math import acos

import numpy as np
from random import uniform, randrange
from math import cos, sin, pi, sqrt, radians, degrees

def total_length(dlist, dist, soma_index): #soma_included

	t_length=0

	for k in range(len(soma_index)-1):

		current=soma_index[k]
		next=soma_index[k+1]

		t_length+=distance(next[2], current[2], next[3], current[3], next[4], current[4])

	for dend in dlist:
		t_length+=dist[dend]
	return t_length

def total_area(dlist, area, soma_index): #soma_included

	t_area=0

	n=0
	for k in range(len(soma_index)-1):

		current=soma_index[k]
		next=soma_index[k+1]

		diam=next[5]
		di=distance(next[2], current[2], next[3], current[3], next[4], current[4])
		a=2*pi*diam*di+2*pi*(diam**2)
		t_area+=a

		if n>0:
			circle_surface=-pi*(diam**2)
			t_area+=circle_surface
		n+=1

	for dend in dlist:
		t_area+=area[dend]

	return t_area

def path_length(dlist, path, dist):
	plength=dict()
	for dend in dlist:
		d=0
		for i in path[dend]:
			d+=dist[i]
		plength[dend]=d
	return plength

def bo_frequency(dlist, bo):

	orders=[]
	for dend in dlist:
		orders.append(bo[dend])

	bo_min=1 # min(orders)
	bo_max=max(orders)

	bo_freq={}

	for i in range(bo_min, bo_max+1):
		k=0
		for order in orders:
			if order==i:
				k+=1
		bo_freq[i]=k

	return bo_freq, bo_max

def bo_dlength(dlist, bo, bo_max, dist):

	bo_dlen={}
	for i in range(1, bo_max+1):

		k=0
		add_length=0

		for dend in dlist:
			if i==bo[dend]:
				k+=1
				add_length+=dist[dend]
				#print str(dend) + ' ' + str(bo[dend]) + ' ' + str(dist[dend])

		if k!=0:
			bo_dlen[i]=add_length/k

	return bo_dlen

def bo_plength(dlist, bo, bo_max, plength):

	bo_plen={}
	for i in range(1, bo_max+1):

		k=0
		add_length=0

		for dend in dlist:
			if i==bo[dend]:
				k+=1
				add_length+=plength[dend]
				#print str(dend) + ' ' + str(bo[dend]) + ' ' + str(dist[dend])

		if k!=0:
			bo_plen[i]=add_length/k

	return bo_plen

def distance(x1,x2,y1,y2,z1,z2): #returns the euclidean distance between two 3d points

	dist = sqrt((x2-x1)**2 + (y2-y1)**2 + (z2-z1)**2)
	return dist

def sholl(dend_list, dend_add3d, bo, con, soma_index, radius):
	
	sholl_list=dict()

	for i in soma_index:
		if i[1]==1:
			xr=i[2]
			yr=i[3]
			zr=i[4]
	
	for val in np.arange(radius, 10000, radius):

		intersection=0

		for dend in dend_list:

			k=0

			for i in dend_add3d[dend]:

				if k==0:
					pass

				else:
					previous_dist=mydist

				x=i[2]
				y=i[3]
				z=i[4]

				mydist=distance(xr,x,yr,y,zr,z)

				if k==0:
					pass

				else:

					if val>previous_dist and val<mydist:

						intersection+=1

				k+=1

		if intersection==0:
			break

		sholl_list[val]=intersection

	return sholl_list

def dist_angle_analysis(dlist, dend_add3d, soma_root, principal_axis):

	dist_angle=[]

	for dend in dlist:

		point_list=[]

		for i in range(len(dend_add3d[dend])):

			x=dend_add3d[dend][i][2]
			y=dend_add3d[dend][i][3]
			z=dend_add3d[dend][i][4]

			point=[x, y, z]

			point_list.append([principal_axis, soma_root, point])

		for i in point_list:

			a=array(i[0], float)
			b=array(i[1], float)
			c=array(i[2], float)

			ba = a-b
			bc = c-b

			quot_a = ba/LA.norm(ba)
			quot_b = bc/LA.norm(bc)

			dotp = dot(quot_a.T,quot_b)
			degree = 180 - acos(dotp)*57.295779513082
			dist = sqrt((x-soma_root[0])**2 + (y-soma_root[1])**2 + (z-soma_root[2])**2)

			dist_angle.append([dist, degree])

	return dist_angle

def dist_angle_frequency(dist_angle, radius):

	dist_freq={}
	angle_f={}

	previous_val=0
	for val in np.arange(radius, 1000, radius):

		angles_freq={}

		angles=[]
		
		count_dist=0
		for i in range(len(dist_angle)):

			if dist_angle[i][0]>previous_val and dist_angle[i][0]<val:
				count_dist+=1
				angles.append(dist_angle[i][1])

		previous_a=0

		for a in np.arange(5, 185, 5):

			count_angle=0
			for i in range(len(angles)):

				if angles[i]>previous_a and angles[i]<a:
					count_angle+=1

			angles_freq[a]=count_angle
	
			previous_a=a


		dist_freq[val]=count_dist
		angle_f[val]=angles_freq

		previous_val=val

	return dist_freq, angle_f

def axis(apical, dend_add3d, soma_index): #weighted linear regression

	def calc_mean(l,d,sum_d):
		ld=[]
		for i in range(len(l)):
			ld.append(l[i]*(d[i]/sum_d))
		l_mean=np.mean(ld)

		ld_weighted=[]

		for i in ld:
			ld_weighted.append(i-l_mean)

		return ld_weighted

	x=y=z=d=[]

	x_soma=soma_index[0][2]
	y_soma=soma_index[0][3]
	z_soma=soma_index[0][4]

	for dend in apical:

		for i in dend_add3d[dend]:

			x.append(i[2]-x_soma)
			y.append(i[3]-y_soma)
			z.append(i[4]-z_soma)
			d.append(i[5])

	sum_d=np.sum(d)
	
	x_weighted=calc_mean(x,d,sum_d)
	y_weighted=calc_mean(y,d,sum_d)
	z_weighted=calc_mean(z,d,sum_d)


	xyz_matrix=[]

	for i in range(len(x_weighted)):

		xyz_matrix.append([x_weighted[i], y_weighted[i], z_weighted[i]])

	(u,s,v)=np.linalg.svd(xyz_matrix)

	principal_axis=[v[0,0]+x_soma, v[1,0]+y_soma, v[2,0]+z_soma]
	soma_root=[x_soma, y_soma, z_soma]
	
	return principal_axis, soma_root
