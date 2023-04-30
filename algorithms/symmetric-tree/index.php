<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for determining if a tree is symmetric.">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="symmetricTree">
                <div class="blogTitle">
                    <h1>Determining if a Tree is Symmetric</h1>


                    <div class='bDate'>Date: May 21, 2016</div>
                </div>

                <div class="blogText">
                    This algorithm works for binary trees as well as for trees with more than two children.

                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.LinkedList;

public class SymmetricTree {

    public static void main(String[] args) {

        Node root = new Node(0);
        setupTree(root);

        boolean flag = isSymmetric(root);
        System.out.println("Tree is symmetric?: " + flag);
    }

    public static boolean isSymmetric(Node root) {
        return isSymmetric(root, root);
    }

    public static boolean isSymmetric(Node nodeLeft, Node nodeRight) {

        if (nodeLeft == null && nodeRight == null) {
            return true;

        } else if (nodeLeft == null || nodeRight == null
            || (nodeLeft.children.size() != nodeRight.children.size())) {

            return false;

        } else if (nodeLeft.value == nodeRight.value) {

            int num = nodeLeft.children.size();
            boolean flag = true;

            for (int i = 0, j = num - 1; i &lt; j; i++, j--) {

                Node left = nodeLeft.children.get(i);
                Node right = nodeRight.children.get(j);

                flag = flag && isSymmetric(left, right);

                if (!flag) {
                    return false;
                }
            }

            if (num % 2 != 0) {

                int index = num / 2;
                Node midLeft = nodeLeft.children.get(index);
                Node midRight = nodeRight.children.get(index);

                flag = flag && isSymmetric(midLeft, midRight);
            }

            return flag;
        }

        return false;
    }

    public static void setupTree(Node root) {

        Node leftChild = new Node(1);
        Node midChild = new Node(2);
        Node rightChild = new Node(1);

        root.children.add(leftChild);
        root.children.add(midChild);
        root.children.add(rightChild);

        leftChild.children.add(new Node(3));
        leftChild.children.add(new Node(4));

        midChild.children.add(new Node(5));
        midChild.children.add(new Node(5));

        rightChild.children.add(new Node(4));
        rightChild.children.add(new Node(3));
    }

    public static class Node {

        int value;
        LinkedList&lt;Node> children;

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
