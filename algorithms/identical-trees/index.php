<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for determining if two trees are identical.">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="identicalTrees">
                <div class="blogTitle">
                    <h1>Determining if Two Trees are Identical</h1>


                    <div class='bDate'>Date: May 21, 2016</div>
                </div>

                <div class="blogText">
                    The algorithm presented here is suited for trees in general (ie. it works for non-binary trees as well).
                </div>

                <div class="algorithm">
                    <pre class="brush: java;">
import java.util.LinkedList;
import java.util.Iterator;

public class IdenticalTrees {

    public static void main(String[] args) {

        int numNodes = 15;
        Node headOne = new Node(0);
        Node headTwo = new Node(0);

        setupTree(headOne, numNodes);
        setupTree(headTwo, numNodes);

        boolean flag = isIdentical(headOne, headTwo);
        System.out.println("Trees are identical? " + flag);
    }

    public static boolean isIdentical(Node nodeOne, Node nodeTwo) {

        if (nodeOne == null && nodeOne == null) {
            return true;

        } else if (nodeOne == null || nodeTwo == null
            || (nodeOne.children.size() != nodeTwo.children.size())) {

            return false;

        } else if (nodeOne.value == nodeTwo.value) {

            Iterator&lt;Node> iterOne = nodeOne.children.iterator();
            Iterator&lt;Node> iterTwo = nodeTwo.children.iterator();
            boolean flag = true;

            while (iterOne.hasNext()) {

                Node childOne = iterOne.next();
                Node childTwo = iterTwo.next();

                flag = flag && isIdentical(childOne, childTwo);
            }

            return flag;
        }

        return false;
    }

    public static void setupTree(Node head, int numNodes) {

        LinkedList&lt;Node> queue = new LinkedList&lt;Node>();
        queue.add(head);

        for (int i = 1; i &lt;= numNodes; i += 2) {

            Node curNode = queue.remove();
            Node leftChild = new Node(i);
            Node rightChild = new Node(i + 1);

            curNode.children.add(leftChild);
            curNode.children.add(rightChild);

            queue.add(leftChild);
            queue.add(rightChild);
        }
    }

    public static class Node {

        LinkedList&lt;Node> children;
        int value;

        public Node(int value) {
            this.value = value;
            children = new LinkedList&lt;Node>();
        }
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
