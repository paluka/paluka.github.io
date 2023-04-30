<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for detecting a Loop in singly linked list">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="cycleDetection">
                <div class="blogTitle">
                    <h1>Detecting a Loop in Singly Linked List</h1>


                    <div class='bDate'>Date: May 8, 2016</div>
                </div>


                <div class="blogText">
                    <span class="bold">Floyd's Cycle Detection Algorithm</span> (The Tortoise and The Hare) and <span class="bold">Brent's Cycle Detection Algorithm</span> (The Teleporting Turtle) are two famous algorithms that solve this problem. Both make use of two pointers that travel through the list at different speeds. If there is a loop/cycle, then the faster moving pointer (the hare) will eventually lap the slower moving pointer (the tortoise). Therefore, when both the hare and the tortoise point to the same node, then a loop/cycle has been detected. Otherwise, if the hare reaches the end of the list, then there is no loop/cycle.

                    <br><br>

                    With Floyd's Cycle Detection Algorithm, the hare takes two steps for every step that the tortoise takes. In Brent's Cycle Detection Algorithm, the tortoise stays stationary until the rabbit has taken 2<sup>n</sup> steps at which time the tortoise teleports to the hare's position and the step counter is reset. The value of n starts at 1 and increases by 1 at each teleportation. Both algorithms have a linear O(n) time complexity, but Brent's algorithm is faster on average.

                    <br><br>

                    <span class="bold">To find the start of the cycle</span> when it has been detected, move the tortoise to the start of the list and increment both the tortoise and the hare one step at a time. The node that they meet at is the start of the cycle.

                </div>

                <div class="algorithm">
                    <pre class="brush: java;">
public boolean detectCycleFloyd() {

    Node tortoise = head;
    Node hare = head;

    while (true) {

        if (hare == null) {
            return false;
        }

        hare = hare.next;

        if (hare == null) {
            return false;
        }

        hare = hare.next;
        tortoise = tortoise.next;

        if (tortoise == hare) {
            findCycleStart(hare, tortoise);
            return true;
        }
    }
}

public boolean detectCycleBrent() {

   Node tortoise = head;
   Node hare = head;
   int stepMax = 2;
   int count = 0;

   while (true) {

        if (hare == null) {
            return false;
        }

        hare = hare.next;
        count++;

        if (hare == tortoise) {
            findCycleStart(hare, tortoise);
            return true;
        }

        if (count == stepMax) {
            count = 0;
            stepMax *= 2;
            tortoise = hare;
        }
   }
}

public void findCycleStart(Node hare, Node tortoise) {

    tortoise = head;

    while (true) {

        if (tortoise == hare) {
            System.out.println("Start: " + hare.value);
            break;
        }

        tortoise = tortoise.next;
        hare = hare.next;
    }
}
                    </pre>
                </div>
            </div>
            <!-- End of blog post -->




        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>

    <script type="text/javascript" src="../script.js"></script>
    <script type="text/javascript" src="../sh/syntaxhighlighter.js"></script>

</body>

</html>
