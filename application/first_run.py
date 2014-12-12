from extract_swc_morphology import *
from neuron_before_swc import *
from statistics_swc import *
from actions_swc import *
import sys

if (len(sys.argv)==3):
	directory=str(sys.argv[1])
	file_name=str(sys.argv[2])
	fname=directory+file_name

else:
	sys.exit(0)

radius=20

(swc_lines, points, comment_lines, parents, bpoints, soma_index, max_index, dlist, dend_indices, dend_names, exceptions, basal, apical, dend_add3d, path, all_terminal, basal_terminal, apical_terminal, dist, area, bo, con, parental_points)=read_file(fname) #extracts important connectivity and morphological data

first_graph(swc_lines, dlist, dend_add3d, directory, file_name) #plots the original and modified tree (overlaying one another)

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

basal_t_length=total_length(basal, dist, soma_index)
fdendlist=directory+'downloads/statistics/'+file_name+'_basal_total_length.txt'
f = open(fdendlist, 'w+')
print >>f, basal_t_length
f.close()

apical_t_length=total_length(apical, dist, soma_index)
fdendlist=directory+'downloads/statistics/'+file_name+'_apical_total_length.txt'
f = open(fdendlist, 'w+')
print >>f, apical_t_length
f.close()

t_area=total_area(dlist, area, soma_index)
fdendlist=directory+'downloads/statistics/'+file_name+'_total_area.txt'
f = open(fdendlist, 'w+')
print >>f, t_area
f.close()

basal_t_area=total_area(basal, area, soma_index)
fdendlist=directory+'downloads/statistics/'+file_name+'_basal_total_area.txt'
f = open(fdendlist, 'w+')
print >>f, basal_t_area
f.close()

apical_t_area=total_area(apical, area, soma_index)
fdendlist=directory+'downloads/statistics/'+file_name+'_apical_total_area.txt'
f = open(fdendlist, 'w+')
print >>f, apical_t_area
f.close()

bo=branch_order(dlist, path)
(bo_freq, bo_max)=bo_frequency(dlist, bo)
fbo=directory+'downloads/statistics/'+file_name+'_branch_order_frequency.txt'
#fbo=directory+file_name+'_branch_order_frequency.txt'
f = open(fbo, 'w+')
for order in bo_freq:
	print >>f, str(order) + ' ' + str(bo_freq[order])
f.close()

bo_dlen=bo_dlength(dlist, bo, bo_max, dist)
fbo_dlen=directory+'downloads/statistics/'+file_name+'_bo_average_dlength.txt'
#fbo_dlen=directory+file_name+'_bo_average_dlength.txt'
f = open(fbo_dlen, 'w+')
for order in bo_dlen:
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
	print >>f, str(length) + ' ' + str(sholl_all_list[length])
f.close

sholl_basal_list=sholl(basal, dend_add3d, bo, con, soma_index, radius)
f_sholl=directory+'downloads/statistics/'+file_name+'_sholl_basal_analysis.txt'
f = open(f_sholl, 'w+')
for length in sholl_basal_list:
	print >>f, str(length) + ' ' + str(sholl_basal_list[length])
f.close

sholl_apical_list=sholl(apical, dend_add3d, bo, con, soma_index, radius)
f_sholl=directory+'downloads/statistics/'+file_name+'_sholl_apical_analysis.txt'
f = open(f_sholl, 'w+')
for length in sholl_apical_list:
	print >>f, str(length) + ' ' + str(sholl_apical_list[length])
f.close

(principal_axis, soma_root)=axis(apical, dend_add3d, soma_index)
dist_angle_basal=dist_angle_analysis(basal, dend_add3d, soma_root, principal_axis)
dist_angle_apical=dist_angle_analysis(apical, dend_add3d, soma_root, principal_axis)
(dist_freq_basal, angles_freq_basal)=dist_angle_frequency(dist_angle_basal, radius)
(dist_freq_apical, angles_freq_apical)=dist_angle_frequency(dist_angle_apical, radius)