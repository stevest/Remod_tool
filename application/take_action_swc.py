from actions_swc import *
from print_file import *

def execute_action(who, action, amount, hm_choice, dend_add3d, dist, max_index, diam_change, dlist, soma_index, points, parental_points):
	
	mylist=[]

	if action != 'none':

		if action == 'shrink':
			newfile=shrink(who, action, amount, hm_choice, dend_add3d, dist, soma_index, points, parental_points)

		if action == 'remove':
			newfile=remove(who, action, dend_add3d, soma_index)

		if action == 'extend':
			newfile=extend(who, action, amount, hm_choice, dend_add3d, dist, max_index, soma_index, points, parental_points)

		if action == 'branch':
			(newfile,dlist,mylist)=branch(who, action, amount, hm_choice, dend_add3d, dist, max_index, soma_index, dlist)

	if diam_change != 'none':

		newfile=diameter_change(who, diam_change, dend_add3d, dlist, soma_index)

	return (newfile, dlist, mylist)

	'''print_newfile(fname, newfile) #prints the lines of the modified tree to a '*_new.hoc' file'''
