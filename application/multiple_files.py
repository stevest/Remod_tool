from extract_swc_morphology import *
from neuron_before_swc import *
from statistics_swc import *
from random_sampling import *
from actions_swc import *
import sys
import numpy as np

def clearall():
    """clear all globals"""
    myl=['directory', 'file_names', 'average_t_length', 'average_basal_t_length', 'average_apical_t_length', 'average_t_area', 'average_basal_t_area', 'average_apical_t_area', 'average_bo_frequency', 'average_bo_dlength', 'average_sholl_all_analysis', 'average_sholl_basal_analysis', 'average_sholl_apical_analysis', 'dist_angle_basal', 'dist_angle_apical', 'remove_empty_keys', 'average_list', 'average_dict', 'round_to', 'radius']
    for uniquevar in [var for var in globals().copy() if var[0] != "_" and var != 'clearall' and var !='myl' and var not in myl]:
        del globals()[uniquevar]

def remove_empty_keys(d):
    for k in d.keys():
        if not d[k]:
            del d[k]

def round_to(x, rounder): #returns the nearest number to the multiplied "rounder"

	return round(x/rounder)*rounder

def average_list(l):
	my_sum=0
	for i in l:
		my_sum+=i
	average=my_sum/len(l)
	return round_to(average, 0.01)

def average_dict(d):
	for i in d:
		my_sum=0
		for k in d[i]:
			my_sum+=k
		average=my_sum/len(d[i])
		d[i]=round_to(average, 0.01)
	return d

def average_dict(d):
	for i in d:
		yours_sum=0
		for k in d[i]:
			yours_sum+=k
		average=yours_sum/len(d[i])
		d[i]=round_to(average, 0.01)
	return d

#python second_run.py /home/bozelosp/Dropbox/remod/swc/ 0-2.swc who_all_terminal 0 none none percent 50 percent 50
#python second_run.py /Users/bozelosp/Dropbox/remod/swc/ 0-2.swc who_all_terminal 0 none none percent 50 percent 50
#python second_run.py /Users/bozelosp/Dropbox/remod/swc/ 0-2.swc who_all_terminal 0 none extend percent 20 none none 
#python second_run.py /Users/bozelosp/Dropbox/remod/swc/ 0-2.swc who_apical_terminal 0 none none percent none percent 10 

if (len(sys.argv)==3):

	directory=str(sys.argv[1])
	file_names=str(sys.argv[2]).split(',')

else:
	sys.exit(0)

average_t_length=[]
average_basal_t_length=[]
average_apical_t_length=[]
average_t_area=[]
average_basal_t_area=[]
average_apical_t_area=[]
average_bo_frequency={k: [] for k in range(0,200)}
average_bo_dlength={k: [] for k in range(0,200)}

radius=20
average_sholl_all_analysis={k: [] for k in np.arange(radius, 10000, radius)}
average_sholl_basal_analysis={k: [] for k in np.arange(radius, 10000, radius)}
average_sholl_apical_analysis={k: [] for k in np.arange(radius, 10000, radius)}

dist_angle_basal=[]
dist_angle_apical=[]

for file_name in file_names:

	from extract_swc_morphology import *
	from random_sampling import *
	from actions_swc import *
	from neuron_before_swc import *
	from statistics_swc import *
	import sys

	fname=directory+file_name

	print
	print 'Open file: ' + str(file_name) + ' !'
	print

	(swc_lines, points, comment_lines, parents, bpoints, soma_index, max_index, dlist, dend_indices, dend_names, exceptions, basal, apical, dend_add3d, path, all_terminal, basal_terminal, apical_terminal, dist, area, bo, con, parental_points)=read_file(fname) #extracts important connectivity and morphological data

	#first_graph(swc_lines, dlist, dend_add3d, directory, file_name) #plots the original and modified tree (overlaying one another)

	file_name=file_name.replace('.swc','')

	fdendlist=directory+'downloads/statistics/'+file_name+'_dendritic_list.txt'
	f = open(fdendlist, 'w+')
	for dend in dlist:
		print >>f, dend
	f.close()

	fdendlength=directory+'downloads/statistics/'+file_name+'_dendritic_lengths.txt' # <--------- temporary
	#fdendlength=directory+file_name+'_dendritic_lengths.txt'
	f = open(fdendlength, 'w+')
	for dend in dlist:
		print >>f, str(dend) + ' ' + str(dist[dend])
	f.close()

	fnumdend=directory+'downloads/statistics/'+file_name+'_number_of_dendrites.txt'
	#fnumdend=directory+file_name+'_number_of_dendrites.txt'
	f = open(fnumdend, 'w+')
	print >>f, 'basal' + ' ' + str(len(basal)) + ' ' + str(len(basal_terminal))
	print >>f, 'apical' + ' ' + str(len(apical)) + ' ' + str(len(apical_terminal))
	f.close()

	t_length=total_length(dlist, dist, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_total_length.txt'
	f = open(fdendlist, 'w+')
	print >>f, t_length
	f.close()
	average_t_length.append(t_length)

	basal_t_length=total_length(basal, dist, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_basal_total_length.txt'
	f = open(fdendlist, 'w+')
	print >>f, basal_t_length
	f.close()
	average_basal_t_length.append(basal_t_length)

	apical_t_length=total_length(apical, dist, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_apical_total_length.txt'
	f = open(fdendlist, 'w+')
	print >>f, apical_t_length
	f.close()
	average_apical_t_length.append(apical_t_length)

	t_area=total_area(dlist, area, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_total_area.txt'
	f = open(fdendlist, 'w+')
	print >>f, t_area
	f.close()
	average_t_area.append(t_area)

	basal_t_area=total_area(basal, area, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_basal_total_area.txt'
	f = open(fdendlist, 'w+')
	print >>f, basal_t_area
	f.close()
	average_basal_t_area.append(basal_t_area)

	apical_t_area=total_area(apical, area, soma_index)
	fdendlist=directory+'downloads/statistics/'+file_name+'_apical_total_area.txt'
	f = open(fdendlist, 'w+')
	print >>f, apical_t_area
	f.close()
	average_apical_t_area.append(apical_t_area)

	bo=branch_order(dlist, path)
	(bo_freq, bo_max)=bo_frequency(dlist, bo)
	fbo=directory+'downloads/statistics/'+file_name+'_branch_order_frequency.txt'
	#fbo=directory+file_name+'_branch_order_frequency.txt'
	f = open(fbo, 'w+')
	for order in bo_freq:
		average_bo_frequency[order].append(bo_freq[order])
		print >>f, str(order) + ' ' + str(bo_freq[order])
	f.close()

	bo_dlen=bo_dlength(dlist, bo, bo_max, dist)
	fbo_dlen=directory+'downloads/statistics/'+file_name+'_bo_average_dlength.txt'
	#fbo_dlen=directory+file_name+'_bo_average_dlength.txt'
	f = open(fbo_dlen, 'w+')
	for order in bo_dlen:
		average_bo_dlength[order].append(bo_dlen[order])
		print >>f, str(order) + ' ' + str(bo_dlen[order])
	f.close()

	plength=path_length(dlist, path, dist)
	bo_plen=bo_plength(dlist, bo, bo_max, plength)
	fbo_plen=directory+'downloads/statistics/'+file_name+'_bo_average_plength.txt'
	#fbo_plen=directory+file_name+'_bo_average_plength.txt'
	f = open(fbo_plen, 'w+')
	for order in bo_dlen:
		print >>f, str(order) + ' ' + str(bo_plen[order])
	f.close()

	sholl_all_list=sholl(dlist, dend_add3d, bo, con, soma_index, radius)
	f_sholl=directory+'downloads/statistics/'+file_name+'_sholl_all_analysis.txt'
	f = open(f_sholl, 'w+')
	for length in sholl_all_list:
		average_sholl_all_analysis[length].append(sholl_all_list[length])
		print >>f, str(length) + ' ' + str(sholl_all_list[length])
	f.close

	sholl_basal_list=sholl(basal, dend_add3d, bo, con, soma_index, radius)
	f_sholl=directory+'downloads/statistics/'+file_name+'_sholl_basal_analysis.txt'
	f = open(f_sholl, 'w+')
	for length in sholl_basal_list:
		average_sholl_basal_analysis[length].append(sholl_basal_list[length])
		print >>f, str(length) + ' ' + str(sholl_basal_list[length])
	f.close

	sholl_apical_list=sholl(apical, dend_add3d, bo, con, soma_index, radius)
	f_sholl=directory+'downloads/statistics/'+file_name+'_sholl_apical_analysis.txt'
	f = open(f_sholl, 'w+')
	for length in sholl_apical_list:
		average_sholl_apical_analysis[length].append(sholl_apical_list[length])
		print >>f, str(length) + ' ' + str(sholl_apical_list[length])
	f.close

	(principal_axis, soma_root)=axis(apical, dend_add3d, soma_index)
	dist_angle_basal.extend(dist_angle_analysis(basal, dend_add3d, soma_root, principal_axis))
	dist_angle_apical.extend(dist_angle_analysis(apical, dend_add3d, soma_root, principal_axis))

	clearall()

import collections
from random_sampling import *
from actions_swc import *
from statistics_swc import *

remove_empty_keys(average_bo_frequency)
remove_empty_keys(average_bo_dlength)
remove_empty_keys(average_sholl_all_analysis)
remove_empty_keys(average_sholl_basal_analysis)
remove_empty_keys(average_sholl_apical_analysis)

print "Average statistics:"
print
print "Total Length (all dendrites): " + str(average_list(average_t_length))
print
print "Total Length (basal dendrites): " + str(average_list(average_basal_t_length))
print
print "Total Length (apical dendrites): " + str(average_list(average_apical_t_length))
print
print "Total Area (all dendrites): " + str(average_list(average_t_area))
print
print "Total Area (basal dendrites): " + str(average_list(average_basal_t_area))
print
print "Total Area (apical dendrites): " + str(average_list(average_apical_t_area))
print
print "Average Number of Dendrites per Branch Order: " +  str(average_dict(average_bo_frequency))
print
print "Average Dendrite Length per Branch Order: " +str(average_dict(average_bo_dlength))
print

mylist=collections.OrderedDict(sorted(average_dict(average_sholl_all_analysis).items()))
print 'Sholl analysis for all'
for i in mylist:
	print i,  mylist[i]
print
mylist=collections.OrderedDict(sorted(average_dict(average_sholl_basal_analysis).items()))
print 'Sholl analysis for basal'
for i in mylist:
	print i,  mylist[i]
print
print 'Sholl analysis for apical'
mylist=collections.OrderedDict(sorted(average_dict(average_sholl_apical_analysis).items()))
for i in mylist:
	print i,  mylist[i]

basal_num=30
apical_num=10

principal_axis=[5.9126497308103749, 14.416496580927726, -3.0699999999999998]
soma_root=[6.49, 13.6, -3.07]

def da (dist_freq_list, angles_freq_list, list_num):

	la=[]

	dist_pop_list = dist_freq_list.keys()
	dist_fr_list = dist_freq_list.values()

	dist_fr_list = [x * 100 for x in dist_fr_list]

	de_novo_dist=weighted_sample(dist_pop_list, dist_fr_list, list_num)

	for i in de_novo_dist:
		
		angles_pop_list=angles_freq_list[i].keys()
		angles_fr_list=angles_freq_list[i].values()

		angles_fr_list = [x * 100 for x in angles_fr_list]

		de_novo_angle=weighted_sample(angles_pop_list, angles_fr_list, 1)

		la.append([i, de_novo_angle[0]])

	return la

(dist_freq_basal, angles_freq_basal)=dist_angle_frequency(dist_angle_basal, radius)
(dist_freq_apical, angles_freq_apical)=dist_angle_frequency(dist_angle_apical, radius)

la_basal=da(dist_freq_basal, angles_freq_basal, basal_num)
la_apical=da(dist_freq_apical, angles_freq_apical, apical_num)

print 'soma'

print 'basal'

print la_basal

for i in la_basal:

	point=createP(i[0], i[1], principal_axis, soma_root, 1)
	print point[0][0], point[0][1], point[0][2]

print 'apical'

print la_apical

for i in la_apical:

	point=createP(i[0], i[1], principal_axis, soma_root, 1)
	print point[0][0], point[0][1], point[0][2]