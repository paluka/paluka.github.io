<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for traversing tree data structures">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="treeTraversal">
                <div class="blogTitle">
                    <h1>Tree Traversal</h1>


                    <div class='bDate'>Date: May 17, 2016</div>
                </div>


                <div class="blogText">


                </div>

                <div class="algorithm">
                    <pre class="brush: java;">
import java.util.LinkedList;
import java.util.List;
import java.util.Iterator;
import java.util.Queue;


public class TreeTraversal {

    public static void main(String[] args) {

        Node head = new Node(0);
        makeTree(head, 15);

        depthFS(head);
        System.out.println();
        breadthFS(head);
    }

    public static void depthFS(Node curNode) {

        if (curNode == null) {
            return;
        }

        visit(curNode);
        Iterator&lt;Node> iter = curNode.getChildren().iterator();

        while (iter.hasNext()) {
            depthFS(iter.next());
        }
    }

    public static void breadthFS(Node head) {

        if (head == null) {
            return;
        }

        Queue&lt;Node> queue = new LinkedList&lt;Node>();
        queue.add(head);

        while (!queue.isEmpty()) {

            Node curNode = queue.remove();
            visit(curNode);

            List&lt;Node> children = curNode.getChildren();
            Iterator&lt;Node> iter = children.iterator();

            while (iter.hasNext()) {
                queue.add(iter.next());
            }
        }
    }

    public static void visit(Node n) {
        System.out.println(n.value);
    }

    public static void makeTree(Node head, int numNodes) {

        LinkedList&lt;Node> parentQueue = new LinkedList&lt;Node>();
        parentQueue.add(head);
        Node curParent = null;

        for (int i = 0; i &lt; numNodes; i += 2) {

            curParent = parentQueue.remove();

            Node leftChild = new Node(i + 1);
            Node rightChild = new Node(i + 2);

            curParent.getChildren().add(leftChild);
            curParent.getChildren().add(rightChild);

            parentQueue.add(leftChild);
            parentQueue.add(rightChild);
        }
    }

    public static class Node {

        int value;
        List&lt;Node> children;

        public Node(int value) {
            this.value = value;
            children = new LinkedList&lt;Node>();
        }

        public void addChild(Node child) {
            children.add(child);
        }

        public List&lt;Node> getChildren() {
            return children;
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
