<?php

$schedule = array(
  array(
    'date' => '2013-01-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'introduction &<br/>motivation',
    'details' => array(
      'course organization',
      '<a href="materials.php#lecture1">lecture notes</a>',
      'high-level overview of course material',
      'models, systems, and system states',
      'review of algebra of real numbers',
      'vectors and vector addition',
      // 'vectors, planes, spaces, and ways to<br/>symbolically represent them',
      'related readings:<ul><li>[Lay 2012]: 1.1; 1.3</li></ul>'
      ),
  ),
  array(
    'date' => '2013-01-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture2">lecture notes</a>',
      'more about algebraic properties',
      'more review of logical formulas',
      'vector addition & scalar multiplication',
      'vector norms and dot products in <b>R</b><sup>2</sup>',
      'linear dependence and independence',
      'orthogonality of vectors',
      'related readings:<ul><li>[Lay 2012]: 6.1; 6.2</li><li>[Bretscher 2009]: 1.3.6; 5.1; A.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-01-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture3">lecture notes</a>',
      'properties of equality',
      'more proof examples and strategies',
      'projections of vectors onto vectors',
      'vector negation and subtraction',
      'related readings:<ul><li>[Lay 2012]: 6.1; 6.2</li><li>[Bretscher 2009]: 2.2; 5.1; 5.5.2</li></ul>'
      ),
  ),
  array(
    'date' => '2013-01-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture4">lecture notes</a>',
      'review of orthogonal projections',
      'lines (as sets of vectors)',
      'vector equations and <i>y</i> = <i>mx</i> + <i>b</i>',
      'linear combinations of vectors',
      'related readings:<ul><li>[Lay 2012]: 6.1</li><li>[Bretscher 2009]: 2.2</li></ul>'
      ),
  ),
  array(
    'date' => '2013-01-31',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture5">lecture notes</a>',
      'lines and planes (as sets of vectors)',
      'more practice with vector properties',
      'linear combinations in applications',
      'related readings:<ul><li>[Lay 2012]: 1.10; 6.1</li><li>[Bretscher 2009]: 2.2</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-04',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=1">assignment #1</a> due</b>'),
  ),
  array(
    'date' => '2013-02-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture6">lecture notes</a>',
      'linear combinations in applications',
      'from linear combinations to matrices',
      'interpretations of matrices',
      'matrix operations and properties',
      'related readings:<ul><li>[Lay 2012]: 1.6; 1.10; 2.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture7b">lecture notes</a>',
      'review: maps and composition',
      'matrix multiplication<ul><li>derived dimension relationships</li><li>system states over time</li></ul>',
      'some subsets of <b>R<sup>n&times;n</sup></b> and properties<ul><li>identity matrix</li><li>scalar matrices</li><li>diaigonal matrices</li></ul>',
      'related readings:<ul><li>[Lay 2012]: 1.10; 2.1</li><li>[Bretscher 2009]: 2.1; 2.3</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture7c">lecture notes</a>',
      'invertible matrices',
      'determinant & inverse of <b>R</b><sup>2&times;2</sup> matrix',
      'related readings:<ul><li>[Lay 2012]: 2.1; 2.2; 2.3</li><li>[Bretscher 2009]: 2.1; 2.3; 2.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-14',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture8a">lecture notes</a>',
      'more subsets of <b>R<sup>n&times;n</sup></b> and properties<ul><li>upper triangular matrices</li><li>lower triangular matrices</li></ul>',
      '<i>Mv</i> = <i>w</i> for <i>M</i> with various properties',
      'elementary matrices & row operations',
      'reduced row echelon forms of matrices',
      'related readings:<ul><li>[Lay 2012]: 1.2; 2.3; 2.5</li><li>[Bretscher 2009]: 1.2; 1.3; 2.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-15',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=2">assignment #2</a> due</b>'),
  ),
  array(
    'date' => '2013-02-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture9">lecture notes</a>',
      'elementary matrices &amp; row operations',
      'more facts about invertible matrices',
      'matrix PLU factorization',
      'related readings:<ul><li>[Lay 2012]: 1.2; 2.3; 2.5</li><li>[Bretscher 2009]: 1.2; 1.3; 2.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-21',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture10">lecture notes</a>',
      'more on rref &amp; row operations',
      'basic example from physics',
      'orthogonal matrices and rotations',
      'related readings:<ul><li>[Lay 2012]: 1.2; 2.3; 2.5</li><li>[Bretscher 2009]: 1.2; 1.3; 2.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-02-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices &amp;<br/>vector spaces',
    'details' => array(
      '<a href="materials.php#lecture11b">lecture notes</a>',
      'orthogonal matrices and rotations',
      'matrix rank',
      'introduction to vector spaces',
      'sets of vectors and their notation'
      ),
  ),
  array(
    'date' => '2013-02-28',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
      '<a href="materials.php#lecture12">lecture notes</a>'
      ),
  ),
  array(
    'date' => '2013-03-01',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=3">assignment #3</a> due</b>'),
  ),
  array(
    'date' => '2013-03-05',
    'dateHTML' => '<span style="text-decoration:underline;">2013-03-05</span><br/><span  style="font-size:10px;">Tuesday<br/>3:30-5 PM</span>',
    'type' => 'midterm exam',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2013-03-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      'review of midterm problems',
      '<a href="materials.php#lecture13">lecture notes</a>',
      'spans of vectors',
      'equality of spans'
      ),
  ),
  array(
    'date' => '2013-03-12',
    'type' => 'spring recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2013-03-14',
    'type' => 'spring recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2013-03-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture13">lecture notes</a>',
      'sets of vectors',
      'span notation for sets of vectors',
      'membership in spans',
      'equality of spans',
      'related readings:<ul><li>[Lay 2012]: 4.1; 4.3</li><li>[Bretscher 2009]: 3.1.2; 3.2; 4.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-03-21',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture14b">lecture notes</a>',
      'abstract vector spaces',
      'sets of polynomials as vector spaces',
      'fitting polynomials to points in <b>R</b><sup>2</sup>',
      'related readings:<ul><li>[Bretscher 2009]: 4.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-03-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(     
      '<a href="materials.php#lecture14b">lecture notes</a>',
      'sets of polynomials as vector spaces',
      'fitting polynomials to points in <b>R</b><sup>2</sup>',
      'basis and dimension of a vector space',
      'related readings:<ul><li>[Lay 2012]: 4.3; 4.5</li><li>[Bretscher 2009]: 3.2; 3.3; 4.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-03-28',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture15">lecture notes</a>',
      'basis and dimension of a vector space',
      'orthonormal basis of a vector space',
      'Gram-Schmidt process',
      'related readings:<ul><li>[Lay 2012]: 4.3; 4.5; 6.2; 6.4</li><li>[Bretscher 2009]: 3.2; 3.3; 5.1; 5.2</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-02',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture16">lecture notes</a>',
      'projection onto a vector subspace',
      'over- &amp; underdetermined systems',
      'homogenous &amp; non-homogenous systems',
      'least-squares approximations',
      'related readings:<ul><li>[Lay 2012]: 1.5; 6.2; 6.3</li><li>[Bretscher 2009]: 3.1.2; 3.2; 4.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-04',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture17">lecture notes</a>',
      'least-squares curve fitting',
      'applications of curve fitting',
      'approximating system relationships',
      'related readings:<ul><li>[Lay 2012]: 6.5; 6.6; 8.1</li><li>[Bretscher 2009]: 5.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-09',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture18a">lecture notes</a>',
      'distributed computation of least-squares',
      'intersections &amp; products of vector spaces',
      'product spaces, relations, &amp; maps'
      ),
  ),
  array(
    'date' => '2013-04-11',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture19">lecture notes</a>',
      'linear transformations &amp; examples',
      'injections &amp; surjections',
      'bijections &amp; isomorphisms',
      'related readings:<ul><li>[Lay 2012]: 1.9; 2.9.1; 4.4.5</li><li>[Bretscher 2009]: 3.1; 3.2; 4.2</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-12',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=4">assignment #4</a> due</b>'),
  ),
  array(
    'date' => '2013-04-16',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture20">lecture notes</a>',
      'projection as a linear transformation',
      'bijections &amp; isomorphisms',
      'matrices as linear transformations',
      'related readings:<ul><li>[Lay 2012]: 1.9; 2.9.1; 4.4.5</li><li>[Bretscher 2009]: 3.1; 3.2; 4.2; 5.4</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-18',
    'type' => 'monday<br/>schedule',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2013-04-23',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'applications to<br/>linear systems',
    'details' => array(
      '<a href="materials.php#lecture21">lecture notes</a>',
      'affine spaces',
      'applications in communications',
      'related readings:<ul><li>[Lay 2012]: 8.1</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-25',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'eigenvectors &<br/>eigenvalues',
    'details' => array(
      '<a href="materials.php#lecture22b">lecture notes</a>',
      'fixed points and spaces',
      'eigenvectors and eigenvalues',
      'related readings:<ul><li>[Lay 2012]: 5.1; 5.2; 5.4</li><li>[Bretscher 2009]: 7.1; 7.2; 7.3</li></ul>'
      ),
  ),
  array(
    'date' => '2013-04-30',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
      '<a href="materials.php#R.2">lecture notes</a>'
      ),
  ),
  array(
    'date' => '2013-05-02',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
      '<a href="materials.php#R.2">lecture notes</a>'
      ),
  ),
  array(
    'date' => '2013-05-03',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=5">assignment #5</a> due</b>'),
  ),
  array(
    'date' => '<span style="text-decoration:underline;">2013-05-09</span><br/><span  style="font-size:10px;">Thursday<br/>3-5 PM<br/>MCS B23</span>',
    'type' => 'final exam',
    'cls' => 'final',
    'topics' => '',
    'details' => array(),
  )
);

?>

<html>
 <head>
 <title>BU CAS MA 142 Spr 2013</title>
 <style>
  body { font-family: Verdana,Arial,Sans-serif; font-size:12px; }
  a { text-decoration:none; color:#AC701E; }
  a:hover { text-decoration:underline; color:firebrick; }
  #container { margin: 8px; }
  #info { margin: 8px; float:left; display:inline-block; }
  #info .lbl { font-weight:bold; color:#555555; }
  #info .sect { color:#888888; }
  #schedule {
    /* max-width:400px;*/
    float:left; display:inline-block;
    margin-top:20px; margin-left:10px; margin-bottom:15px; 
    border-collapse:collapse; 
    font-family: Verdana,Arial,Sans-serif; font-size:12px;
    }
  #schedule td { border: 1px solid #CCCCCC; padding:6px; }
  #schedule .lecture { }
  #schedule .nolecture { color:#AAAAAA; font-style:italic; }
  #schedule .assignmentdate { }
  #schedule .midterm { color:firebrick; font-weight:bold; }
  #schedule .final { color:firebrick; font-weight:bold; }
  #schedule .review { font-weight:bold; }
  #schedule .upcoming { background-color:#F9EFE1; }
  #schedule .lecture_label { color:#AAAAAA; font-weight:normal; font-style:normal; }
  ul { padding-top:0px; padding-bottom:0px; padding-left:0px; padding-right:25px; margin:0px;  }
  li { 
    list_style_type:none; list-style-image:url('bullet.png'); padding:0px;
    min-width:200px; position:relative; left:15px; text-align:left; line-height:140%;
    }
  #info_items li { margin-bottom:4px; }
  #info_items li ul { margin-top:4px; }
  #info_items li ul li { margin-bottom:4px; }
 </style>
 </head>
 <body>
 <div id="container">

  <div id="info">
   <br/><b>Mathematics 142 - Introduction to Linear Algebra </b>
   <br/>
   <br/>
   <br/>
   <ul class="info_items">
    <li><span class="sect">lectures:</span>
     <br/>&nbsp;&nbsp; Tue. & Thu., 3:30 PM - 5:00 PM in MCS B23
     <br/>&nbsp;&nbsp; <span class="lbl">lecturer:</span> <a href="https://lapets.io">Andrei Lapets</a>  (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>, MCS 176)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Tue. 1-3 PM; Wed. 3-4 PM
     <br/>
     <br/>
    </li>
    <!--<li><span class="sect">sections:</span>
     <br/>&nbsp;&nbsp; Mon., 11:00 AM - 12:00 PM in MCS B33
     <br/>&nbsp;&nbsp; Mon., 3:00 PM - 4:00 PM in PSY B37
     <br/>&nbsp;&nbsp; Mon., 12:00 PM - 1:00 PM in CAS 212
     <br/>&nbsp;&nbsp; <span class="lbl">teaching fellow:</span> TBA
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> TBA
     <br/>
     <br/>
    </li>-->
    <li><span class="sect">for questions and discussion:</span>
     <br/>&nbsp;&nbsp; <a href="mailto:casma142a1-l@bu.edu">casma142a1-l@bu.edu</a> (course mailing list)
     <br/>&nbsp;&nbsp; <a href="https://piazza.com/bu/spring2013/ma142">Q&amp;A page</a> on Piazza
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">homework assignment policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> by 11:59 PM on due date (<a href="mailto:lapets@bu.edu">by email</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">collaboration:</span> discussion only; list all collaborators
     <br/>&nbsp;&nbsp; <span class="lbl">late policy</span>: -10 points per day, 5 days maximum
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course grade:</span>
     <br/>&nbsp;&nbsp; 50% <i>homework</i> + 50% max{<i>final</i>, avg{<i>mid</i>, <i>final</i>}}</li>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course materials:</span>
     <br/>&nbsp;&nbsp; <a href="materials.php">lecture notes</a> (with assignments and review problems)
     <!--<br/>&nbsp;&nbsp; <a href="http://www.pearsonhighered.com/educator/product/Linear-Algebra-and-Its-Applications/9780321385178.page">recommended textbook</a> (related readings are optional)-->
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=1">assignment #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=2">assignment #2</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=3">assignment #3</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=4">assignment #4</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=5">assignment #5</a></b>
     <br/>&nbsp;&nbsp; <b><a href="practice-final.pdf">practice final (with solutions)</a></b>
    </li>
   </ul>
   <br/>
   <!--<ul class="info_items">
    <li><span class="sect">software used in the course:</span>
     <br/>&nbsp;&nbsp; <a href="http://www.python.org/getit/">Python 3.2</a>
     <br/>&nbsp;&nbsp; aartifact
    </li>
   </ul>-->
   <br/>
   <ul class="info_items">
    <li><span class="sect">other reading materials (not required):</span>
     <br/>
     <br/>&nbsp;&nbsp; <b><a href="http://www.pearsonhighered.com/educator/product/Linear-Algebra-with-Applications/9780136009269.page">Linear Algebra with Applications.</a></b>
     <br/>&nbsp;&nbsp;&nbsp;&nbsp; Otto Bretscher.
     <br/>
     <br/>&nbsp;&nbsp; <b><a href="http://www.pearsonhighered.com/educator/product/Linear-Algebra-and-Its-Applications/9780321385178.page">Linear Algebra and Its Applications.</a></b>
     <br/>&nbsp;&nbsp;&nbsp;&nbsp; David C. Lay.
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><a href="http://www.bu.edu/academics/resources/academic-conduct-code/">academic conduct code</a></li>
   </ul>
   <br/>
  </div>

  <table id="schedule">
   <?php
     $upcoming = 'unshown';

     foreach ($schedule as $entry) {
       if ($upcoming == 'show') $upcoming = 'shown';
       if ($upcoming == 'unshown' && $entry['date'] >= date("Y-m-d")) $upcoming = 'show';

       echo '<tr class="'.$entry['cls'].' '.($upcoming=='show'?'upcoming':'').'">';
       if ($entry['cls'] == 'assignmentdate')
         echo '<td style="color:#AAAAAA; font-style:italic;">'.$entry['date'].'</td>';
       else
         echo '<td>'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';

       if ($entry['type'] == 'lecture') {
         if ($entry['topics'] == '')
           echo '<td><span class="lecture_label">'.$entry['type'].'</span></td>';
         else       
           echo '<td><span class="lecture_label">'.$entry['type'].':</span><br/>'.$entry['topics'].'</td>';
       } else
         echo '<td>'.$entry['type'].'</td>';

       echo '<td><ul>';
       foreach ($entry['details'] as $item)
         echo '<li>'.$item.'</li>';
       echo '</ul></td>';
       echo '</tr>';
     }
   ?>
  </table>

 </div>
 </body>
</html>
