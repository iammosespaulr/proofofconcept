#!/opt/local/bin/python
# Physics Equation Graph
# Ben Payne <ben.is.located@gmail.com>
# builds the graph of equations as PNG or SVG by reading from databases
# use: python bin/build_derivation_png_from_csv.py

# files required as input: 
#    lib_physics_graph.py
#    connections_database.csv
# output: 
#    graph_all_with_labels.png
#    graph_all_without_labels.png

import yaml # used to read "config.input"
import os.path
import sys
lib_path = os.path.abspath('lib')
db_path = os.path.abspath('databases')
output_path = os.path.abspath('output')
sys.path.append(lib_path) # this has to proceed use of physgraph

import lib_physics_graph as physgraf

# http://stackoverflow.com/questions/6665725/parsing-xml-using-minidom
#import easy to use xml parser called minidom:
from xml.dom.minidom import parseString

prompt_for_which_derivation=True
if (len(sys.argv)>1):
  input_list=sys.argv
  print 'Number of arguments:', len(input_list), 'arguments.'
  print 'Argument List:', input_list
  which_derivation_to_make=input_list[1]
  print("selected: "+which_derivation_to_make)
  prompt_for_which_derivation=False

# https://yaml-online-parser.appspot.com/
input_stream=file('config.input','r')
input_data=yaml.load(input_stream)
extension=input_data["file_extension_string"]
  
expr_pictures=lib_path+'/images_expression_'+extension
infrule_pictures=lib_path+'/images_infrule_'+extension
feed_pictures=lib_path+'/images_feed_'+extension

connectionsDB    =db_path+'/connections_database.csv'
infruleDB        =db_path+'/inference_rules_database.csv'

connections_list_of_dics=physgraf.convert_connections_csv_to_list_of_dics(connectionsDB)
infrule_list_of_dics=physgraf.convert_infrule_csv_to_list_of_dics(infruleDB)
# print(infrule_list_of_dics)

if (prompt_for_which_derivation):
  which_derivation_to_make=physgraf.which_set(connections_list_of_dics)
which_derivation_to_make_no_spaces='_'.join(which_derivation_to_make.split(" "))
if (which_derivation_to_make=='all'):
  print("all")
elif (which_derivation_to_make=='each'):
  print("each")
elif (which_derivation_to_make=='EXIT'):
  print("exiting")
  exit()
else:
  connections_list_of_dics=physgraf.keep_only_this_derivation(which_derivation_to_make,connections_list_of_dics)

tex_file=open(output_path+'/'+which_derivation_to_make_no_spaces+'.tex','w')
physgraf.latex_header(tex_file)

for this_infrule in infrule_list_of_dics:
  tex_file.write('\\newcommand{\\'+this_infrule["inference rule"]+''+ '}['+this_infrule["number of arguments"]+']{'+this_infrule["LaTeX expansion"]+'}\n')
tex_file.write('\\begin{document}\n')



tex_file.write('\\end{document}\n')
tex_file.close()
