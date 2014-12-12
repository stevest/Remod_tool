def print_newfile_tmp(directory, file_name, newfile, edit):

	new_name=directory+file_name.replace('.swc','') + '_new_tmp.swc'

	f = open(new_name, 'w')
	print >>f, ('\n').join(newfile)
	print 'Hi'
	return new_name
	f.close()

def print_newfile(directory, file_name, newfile, edit):

	new_name=directory+'downloads/files/'+file_name.replace('.swc','') + '_new.swc'

	f = open(new_name, 'w')
	print >>f, edit
	print >>f, ('\n').join(newfile)
	f.close()