<div id="linkBar">
    <a href="http://www.erikpaluka.com/algorithms/#shuffling">&#9656; Shuffling</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#quicksort3Way">&#9656; 3-Way Partition Quicksort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#quicksortDP">&#9656; Dual-Pivot Quicksort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#quicksort">&#9656; Quicksort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#stack2Queues">&#9656; Implement Stack using Two Queues</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#heapsort">&#9656; Heapsort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#mergeSort">&#9656; Merge Sort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#towerHanoi">&#9656; The Tower of Hanoi</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#shellSort">&#9656; Shell Sort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#selectionSort">&#9656; Selection Sort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#insertionSort">&#9656; Insertion Sort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#bubbleSort">&#9656; Bubble Sort</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#maxSubmatrix">&#9656; Finding the Maximum Submatrix</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#maxSubarray">&#9656; Finding the Maximum Subarray</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#symmetricTree">&#9656; Determining if a Tree is Symmetric</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#identicalTrees">&#9656; Determining if Two Trees are Identical</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#greedy">&#9656; Stock Profit using Greedy Algorithm</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#primeNumbers">&#9656; Generating Prime Numbers</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#fibonacci">&#9656; Calculate a Fibonacci Number</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#palindrome">&#9656; Determine if a String is a Palindrome</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#factorial">&#9656; Find the Factorial of a Number</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#treeTraversal">&#9656; Tree Traversal</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#swapInts">&#9656; Swap Numbers Without Temp Variable</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#stringPermutation">&#9656; Generating All Permutations of a String</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#binarySearch">&#9656; Binary Search Algorithm</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#reverseWords">&#9656; Reversing the Words in a String</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#pointInPolygon">&#9656; Checking if a Point Lies Within a Polygon</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#duplicateArray">&#9656; Checking Array for Duplicate Elements</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#cycleDetection">&#9656; Detecting a Loop in Singly Linked List</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#removeNode">&#9656; Remove Node at Position in Linked List</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#reverseList">&#9656; Reversing a Singly Linked List</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#extractBits">&#9656; Extract n Bits Between Bits i and j</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#isolateBit">&#9656; Isolate Last Bit</a><br>
    <a href="http://www.erikpaluka.com/algorithms/#unsetBit">&#9656; Unset Last Bit</a>
</div>

    <div id="arrowUp" style="text-align:center; position: fixed; bottom: 30px; margin-left: 750px; opacity: 0; z-index: -1">
            <img id="arrowUpImg" src="http://www.erikpaluka.com/img/arrow-up.png" onclick="smoothScrollTo(document.getElementById('arrowUp'), document.getElementById('linkBar').offsetTop)">
        </div>

<script>

window.onscroll = function() {
    var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

    var arrow = document.getElementById("arrowUp");

    if (scrollTop > 500 && arrow.style.opacity <= '0.1') {

       unfade(arrow);
    } else if (scrollTop <= 500 && arrow.style.opacity >= '1') {
               fade(arrow);

    }
}

function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.2){
            clearInterval(timer);
            element.style.opacity = 0;
            element.style.zIndex = -1;
            return;
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 10);
}

function unfade(element) {
    var op = 0.1;  // initial opacity
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
            element.style.opacity = 1;
            return;
        }
        element.style.opacity = op;
        element.style.zIndex = 1;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
}

   window.smoothScrollTo = (function () {
  var timer, start, factor;

  return function (button, target, duration) {
      if (button.style.opacity < 1) {
          return;
      }

    var offset = window.pageYOffset,
        delta  = target - window.pageYOffset; // Y-offset difference
    duration = duration || 1000;              // default 1 sec animation
    start = Date.now();                       // get start time
    factor = 0;

    if( timer ) {
      clearInterval(timer); // stop any running animations
    }

    function step() {
      var y;
      factor = (Date.now() - start) / duration; // get interpolation factor
      if( factor >= 1 ) {
        clearInterval(timer); // stop animation
        factor = 1;           // clip to max 1.0
      }
      y = factor * delta + offset;
      window.scrollBy(0, y - window.pageYOffset);
    }

    timer = setInterval(step, 10);
    return timer;
  };
}());
</script>

