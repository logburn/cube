<!DOCTYPE html>
<html>
<?php
  $t = "4x4x4";
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
  <p class="disclaimer">The method for solving the four by four rubik's cube is quite simple.  The basic goal is to turn it into a three by three, by matching centers and edges with each other.  Then we can solve it like a three by three, but on the last layer we may run into parody errors.  This means that we cannot solve it like a three by three, because we have a circumstance that is impossible on the three by three.  The solution for this is simple, if this is the only thing you need, click <a href="#parodyLink">here</a>. **Note:I am assuming you are already familiar with the three by three, and it may be difficult if you are not, you may have to rely fully on the video**</p>
  <h1>PART ONE - CENTERS</h1>
  <iframe style="float: right; margin: 10px; position: relative; top: 10px;" width="515" height="325" src="https://www.youtube.com/embed/vArGJLLdWh8" frameborder="0" allowfullscreen></iframe>
  <p>This is really pretty easy, and mostly intuitive, but it can be tricky in places.  The first step is to get one of the centers, the second step is to get the opposite, so if we got the white center, we would get the yellow center next, as that is opposite white.  To do this, we get two of the white lines, by putting the seperate center pieces together, and then putting those together.  To get the second side, we obviously  cannot mess up the first one.  So, we line up the seperate cubies,  getting the "lines".  Now we get one of them into the top layer, by bringing it up, moving the top so that it is out of the range of motion,  and then reconnecting the white.  To bring one out, we pretty much do the same thing.  To get the second line, we must line up the yellows, so that when you bring it in, bring it away from the range of motion, and then replace it.  This will put in the other line as well.  Now we have to get the third one, which is obviously going to just be a simple matter of getting it in by moving the inside lines.  This is mostly intuitive.  Now we move on to the second color. This is going to be a little bit more tricky, because we need to not mess it up, and we don't want to put the color scheme in wrong.  To know which color goes where, you can find a corner. as they never change color.  So your going to have to make the lines again, but you have to keep in mind that if we break something up, we have to replace it, so we have to do out moves, then bring it out of the range of motion, and undo what we did.  We cannot just continue as if we didn't break something up, because we did.  So we have to do the same thing we did before, make them into the same line, bring it in, bring it out of the range of motion, and undo the damage we may have done.</p>
  <h1>PART TWO - EDGES</h1>
  <p>Once we have the centers done (if you're having trouble email me), we need to get the edges done, as this will turn our four by four into a three by three, and thus we can solve it like one.  To do this we find two edge pieces that need to be paired.  Now we get the two edge pieces so that if we just turned one of the inner layes, the pieces would be matched up( but we can't do this, as it would mess up the centers). Also, one of the cubies need to be on the bottom layer, and one in one of the areas above it. With it in this position, we do the following:  Bring the cubie down(the pieces are aligned), bring the bottom the the right, bring the right up(clockwise), bring the bottom back to the left,  and fix the centers.  This will pair up the two edges, and you can do this for the rest of the edges, up until the last two or three.   If you have two left at the end, you need to "pair up" the cubies wrong, this will have the effect of giving you another pair.  To do this, we simply make it so that when we place the cubie down to line it up with it's center, it's the opposite cubie.  Now, with three pairs left,  we put one pair in the middle layer, on the right side, and turn the right side twice.  Now we align up the cubies as before, being sure to not mess up the other pair we placed earlier.  Now we make sure it's in the right spot.  We dicide this by going the the motions in our mind, and seeing if the third cubie lines up with it's pair, if it does, we go forth and solve the two edges.  If not, we do the following:   turn the top to the right(clockwise), turn the right side twice, and the bottom to the left(counter-clockwise).  Now it will pair up.  With all of the edges complete, we solve it like a three by three.  On the last layer, you may notice something odd, or NOT like a three by three, if this is the case,  solve the parody case as shown below.</p>
	  <span id="parodyLink"></span>
 	  <iframe width="515" height="325" src="https://www.youtube.com/embed/aMgcU6PIUhw?ecver=2" frameborder="0" allowfullscreen></iframe><br><br>
 	  <h1>EDGE PARODY</h1>
 	  <p>Solving this is relatively easy, but can be difficult at first.  To start, we make the edge face us.  Now we do the following:  Bring the right inner layer down, move the top twice, bring the left layer down,  spin the front twice,  left back up,  front twice(pause for breath here), right inner layer twice,  top twice,  right inner up once,  top twice,  right inner down,  top twice(gasp for breath again),  front twice,  right inner twice, front twice again.  Now it's solved!</p>
 	  <iframe width="515" height="325" src="https://www.youtube.com/embed/mB--BAHIAwI" frameborder="0" allowfullscreen></iframe>
 	  <h1 class="move">CORNER PARODY</h1>
 	  <p class="move">This parody is simpler than the edge parody,  but it messes up the bottom layer(this can be fixed easily). Also, note that it's extreemly repetetive. To start, we make the two corners not solved face outwards in the same direction, like headlights,  and make those face us.  Now we:  move the right inner layer twice, top layer twice, right inner twice,  top two twice, right inner layer twice, and top two layers twice.  Now it's messed up the bottom layer, and we simply solve it like a three by three.</p>
 </div>
 </body>
</html>