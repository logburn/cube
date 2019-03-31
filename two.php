<!DOCTYPE html>
<html>
<?php
  $t = "2x2x2";
  include 'head.php';
?>

<body>
<h1 class="rmcTitle">RUBIKS MY CUBE</h1>
<?php
  include 'menu.php';
?>

 <div id="ham">
   <img src="i/ham.png">
 </div>
  <div id="pageContent">
    <h1>
      INTRODUCTION
    </h1>
    <p>
      There are two methods to solving the 2x2x2. One method utilizes the 3x3x3 algorithms that already exist (farther down the page), which not reccomended unless you simply want the cube solved. For faster and better solves, use the new 2x2x2 algorithms (remember, I use as little algorithms on this site as possible so it's not that bad).
    </p>
    <h1>
      NEW ALGORITHMS
    </h1>
    <iframe style="float: right; margin: 10px; position: relative; top: 10px;" width="520" height="328" src="https://www.youtube.com/embed/5U3DgN71uuo" frameborder="0" allowfullscreen></iframe>
    <p id="twoByVideo">
      In this tutorial, the Sergs B. teaches you to first solve the top layer, then solve the second layer.  For the first layer, you spin the bottom layer, until you find a cubie in the optimal position.  The optimal position is when a cubie has your top layer's color facing you.  If you find one, take note of the color of the other sides.  So, we put it under where we want it to be,  and if we find that the cubie is on the right side, bring the bottom to the left, the right down, stick it in (move the bottom to the right), and bring up the right.  If we had one on the left side, we would do the same thing, but instead of bringing the bottom to the left, we bring it to the right.  Do this for any other cubies in the optimal position.  if we find that a cubie is not in the optimal  position, it will be in one of two positions: either in the top layer, but oriented incorrectly, or in the wrong spot, or in the bottom/second layer, but flipped the wrong way.  For the first circumstance, we must bring the cubie out.  To do this, we put the cubie on the bottom right position, bring the right down, the bottom to the left, and the right up.  Now we may put it in.  For the latter circumstance,  we do this: put it under a spot that is not solved(by turning the bottom layer), move the entire cube so that that spot is now on the right side,  bring the right down, and move the bottom twice.  This will put it right, and we can put it in.  Do this for the top layer, until it is solved, then we can move on to the-<br><br>
<b>Bottom Layer</b>-   For the bottom layer, we must turn the whole cube over, as always.  The preferable  configuration of the bottom is when a corner piece is oriented, and no others are.   So, to solve this, we need to know where to other cubie is. The way we know what the other cubie in this case is: if we are looking at the corner cubie, and there is one yellow that is pointing outwards, that is the cubie we want.  If the cubie is on the right, we do this: move the entire cube so that the cubie that is facing up is on the left side, and this puts the other cubie on the right.  Now, we preform the right soon.  If you haven't watched the video, here's how to do it:  Bring the right up, move the top to the left(clockwise), bring the right back down,  move the top to the left again,  bring the right up, move the top twice, replacing the piece, and bring the right back down, restoring the bottom.  If you had the cubie on the left, you put the cubie with the yellow facing up i the bottom right position, puting the cubie with the yellow facing out in the bottom left position.  Now we preform the left soon.  This is how it goes: We bring up the left side, move the top to the right(counter-clockwise), bring the left down, move the top to the right again, bring up the left, and move the top twice, replacing the whites, then simply bring the left down.  This will give you an all yellow side of the cube, but you'll notice, unless you're extremely lucky, that the cube is not, in fact, solved.  So, we find the two cubies that, on their not-yello side, have two colors that are the exact same.  If you cannot find them, you will just have to choose two, and do this twice. What we do is: put the two same-color edge pieces so that they oine up with their corresponding colors,  move the entire cube so that those two are on the back,  turnt he entire cube so that the white(top color) is facing you,  bring down the right, turn the top(clockwise), bring down the right, turn the bottom twice, lift up the right, turn the top(counter-clockwise), bring down the right, turn the bottom twice, reconnect the white(top color) again by turning the right twice.  And now the cube is solved!
    </p>
    <h1>
      MORE BOTTOM LAYER CASES
    </h1>
    <p>
      If you have no yellow cubies facing up, and if you'll notice, you have a line either on the left or on the right side, which will correspond with the line(this will not be yellow) on the top of the cube. So what we'll do is, hold that line so the yellow is facing to the left,  and preform the right soon.  If you don't know how to do it, here it is:  Bring up the right, move the top to the left, bring down the right, move the top left again,  bring up the right, move the top twice, bring down the right.  That will give you the case on the right.<br>If you have a yellow line on the top of the cube,  you will either have another yellow line on the edge, or two unconnected yellows on separate edges.  For the latter case, we put the line facing up on the left, and preform the right soon.  For the strait line on the edge, we put the line so that they are horizontle to us, and preform the right soon.<br>
  If you have a checker-board pattern, with the yellow diagonal to the other yellow, move the cube so that the dot on the left edge piece is facing the left side of the cube (this will put it in the bottom left position), and preform the right soon.  This will give you the parrallel lines, which can be solved as above.  Doing any of these wil give you optimal position, and you can do as described on the right.
    </p>
    <h1>
      SOLVING WITH 3x3 ALGORITHMS
    </h1>
    <p>
      <b>This is not a speed solving technique.</b>  This is just a way to solve it, just to do it.  I did make it myself, but it could have been made before I did.  It's reletivly easy, and solves the parody error.  So this is how it's done:<br>
The first step is mostly intuitive, just solve the top layer using three by three algorithms. You'll notice there are no centers,  so you can choose anyside for the 'top' to be.  Once you have that, turn the whole cube around.  The layer that was the bottom is now the top, and will be referred to as.  Now you can move the top, until you find a corner cubie that is in the correct position.  There will always be at least one.  If you have two, do not do the following, but if you only have one, do the corner switching algorithm, like on the three by three,  until you have two corners that are in the right spot(don't have to be oriented).  If you have all the corners, simply flip them using the last algorithm on the <a href="three.html#third">three by three</a>. You may be able to solve the cube now, simply using the corner switching and flipping algorithms.  But you may also run into a case like this.  To solve this, you need it to look exactly like this case.  Use corner flipping and switching algorithms to make it so. Once you have this, turn the entire cube so that the "headlights" face down, And the cube looks like this. Once you have that, you can do this to finish the cube:  move the to (counter-clockwise), bring the left up(counter-clockwise), repeat until solved.
    </p>
  </div>
</body>
</html>