<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for removing a node at position p in a singly linked list">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


<div class="blogEntry" id="removeNode">
                <div class="blogTitle">
                    <h1>Remove Node at Position p in a Singly Linked List</h1>


                    <div class='bDate'>Date: May 8, 2016
                        <br><br>
                    Both algorithms (methods) accomplish the same thing.</div>
                </div>

                <div class="algorithm">
                <pre class="brush: java;">
public Node removeA(int p) {

    if (head == null) {
        return null;

    } else if (p == 0) {

        Node temp = head;

        if (tail == head) {
            tail = head.next;
        }

        head = head.next;
        return temp;

    } else {

        int count = 1;
        Node prev = head;

        while (true) {

            if (count == p) {

                if (prev.next == null) {
                    return null;
                }

                Node temp = prev.next;
                prev.next = prev.next.next;

                if (prev.next == null) {
                    tail = prev;
                }

                return temp;
            }

            prev = prev.next;
            count++;
        }
    }
}

public Node removeB(int p) {

    Node cur = head;
    Node prev = null;
    int count = 0;

    while (true) {

        if (cur == null || count == p) {
            break;

        } else {

            prev = cur;
            cur = cur.next;
            count++;
        }
    }

    if (cur != null) {

        if (p == 0) {
            head = null;
            tail = null;

        } else {

            prev.next = cur.next;

            if (cur.next == null) {
                tail = prev;
            }
        }
    }

    return cur;
}
                </pre>
</div>
</div>




        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>

    <script type="text/javascript" src="../script.js"></script>
    <script type="text/javascript" src="../sh/syntaxhighlighter.js"></script>

</body>

</html>
