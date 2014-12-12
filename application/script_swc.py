from extract_swc_morphology import *
from take_action_swc import *
from warn import *
from graph import *
import sys
import datetime

if (len(sys.argv)==8):
	path=str(sys.argv[1])
	file_name=str(sys.argv[2])
	fname=str(sys.argv[1])+str(sys.argv[2])

	who=str(sys.argv[3])
	action=str(sys.argv[4])
	hm_choice=str(sys.argv[5])
	amount=int(sys.argv[6])
	diam_change=sys.argv[7]
else:
	sys.exit(0)

print
print fname
print

(swc_lines, points, comment_lines, parents, bpoints, soma_index, max_index, dlist, dend_points, dend_names, exceptions, basal, apical, dend_add3d, path, all_terminal, basal_terminal, apical_terminal, dist)=read_file(fname) #extracts important connectivity and morphological data

choices=[]
for line in open('choices_swc.txt'):
	line.rstrip('\n')
	choices.append(line)

#regex_who=re.search('(.*)', choices[0])
#who=regex_who.group(1)
if who=='all_terminal':
	who=all_terminal
if who=='apical_terminal':
	who=apical_terminal
if who=='basal_terminal':
	who=basal_terminal
if who=='random_all':
	who=random_all
if who=='random_apical':
	who=random_apical
if who=='random_basal':
	who=random_basal
if who=='manual':
	who=apical_terminal

#regex_action=re.search('(.*)', choices[1])
#action=regex_action.group(1)

#hm=choices[2].split()
#if hm[0]=="hm_choice:":
#	hm_choice=hm[1]

#am=choices[3].split()
#if am[0]=="amount:":
#	amount=int(am[1])

#diam=choices[4].split()
#if diam[0]=="diameter_change:":
#	diam_change=diam[1]

#print who, action, amount, hm_choice
#check_terminal(who, all_terminal) #checks if selected dendrites are terminal

now = datetime.datetime.now()

edit='#REMOD edited the original ' + str(file_name) + ' file as follows: ' + 'dendrites: ' + str(who) + ', action: ' + str(action) + ', extent choice: ' + str(hm_choice) + ', amount: ' + str(amount) + " - This file was modified on " + str(now.strftime("%Y-%m-%d %H:%M"))

newfile=execute_action(who, action, amount, hm_choice, dend_add3d, dist, max_index, diam_change) #executes the selected action and print the modified tree to a '*_new.hoc' file

newfile=comment_lines + newfile

print_newfile(fname, newfile, edit)

graph(swc_lines, newfile, action, dend_add3d, dlist) #plots the original and modified tree (overlaying one another)

'''for dend in dlist:
	print dend, dend_points[dend]
	print

print
print
for dend in dlist:
	print dend, path[dend]

print
print
for dend in all_terminal:
	print dend, path[dend]'''
