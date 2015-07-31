<html>
  <head>
    <title>Physics Derivation graph</title>
    <!--
    <META http-equiv="refresh" content="0;URL=http://allofphysicsgraph.github.io/proofofconcept/site/graph_from_scratch_15_with_links.html">
    -->
  </head>
  <body bgcolor="#ffffff">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS7JL5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS7JL5');</script>
<!-- End Google Tag Manager -->

<table width="100%">
<tr>
  <td width="10%">&nbsp;</td>
  <td width="2%">&nbsp;</td>
  <td width="78%">&nbsp;</td>
  <td width="10%">&nbsp;</td>
</tr>  
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
    <center>
    <H2>Physics Derivation Graph</H2>
    </center>
  </td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td valign="top">

  <?php include 'nav_bar.html';?>
  </td>
  <td>&nbsp;</td>
  <td>
<P><a href="https://en.wikipedia.org/wiki/Mathematical_physics">Mathematical Physics</a> uses the tools of math applied to measurements of our environment. 

<P>A simple example is the relation between period, <i>T</i>, and linear frequency, <i>f</i>. The mathematical expression of the relation is <i>T=1/f</i>. To express frequency as a function of period, multiply both sides of the expression by <i>f</i> to get a new expression, <i>T*f=1</i>. Finally, divide both sides of the second expression by <i>T</i> to yield the third expression, <i>f=1/T</i>.

<P>In this example, there are three expressions. Each expression is defined by a left-hand side, a relation operator (here "="), and a right-hand side. Two instances of the <a href="https://en.wikipedia.org/wiki/Equivalence_relation#Definition">Equivalence relation</a> relate the three expressions. These relations between expressions are called <a href="https://en.wikipedia.org/wiki/List_of_rules_of_inference">inference rules</a>. The generic form of the first inference rule used in the example is "multiply both sides of an expression by a quantity to yield a new expression." Similarly, the second inference rule is generically, "divide both sides of an expression by a quantity to yield a new expression."

<P><?php include 'site/example_T_f_d3js.html';?></P>

<P>Graph formats: <a href="site/example_T_f_csv.html">CSV</a>, <a href="site/example_T_f_networkx.html">Networkx</a>, <a href="site/example_T_f_mathematica.html">Mathematica</a>, <a href="site/example_T_f_graphml.html">GraphML</a>, <a href="site/example_T_f_dot.html">GraphViz</a>, <a href="site/example_T_f_json.html">JSON</a>, and <a href="site/example_T_f_tex.html">LaTeX</a>. </P>

<P>Derivations used in Physics are mathematical expressions linked by a finite set of inference rules. From this observation, a few claims can be made.
<UL>
  <LI>A finite static graph exists which relates all expressions of mathematical physics. In this graph, nodes are expressions and edges are inference rules.</LI>
  <LI>A finite number of unique inference rules are needed to express the relations between expressions.</LI>
</UL>
</P>

<P>No new research in math or physics is needed to validate these claims. This project documents the relations between derivations used to describe physical experiments.</P>


<?php include 'footer.html';?>
  </td>
  <td>&nbsp;  </td>
</tr>
</table>
  </body>
</html>
