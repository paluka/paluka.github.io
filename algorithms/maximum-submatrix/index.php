<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for finding the maximum submatrix within another matrix.">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="maxSubmatrix">
                <div class="blogTitle">
                    <h1>Finding the Maximum Submatrix Within Another Matrix</h1>


                    <div class='bDate'>Date: May 23, 2016</div>
                </div>

                <div class="blogText">
                    This algorithm works by employing <span class="bold">Kadane's algorithm</span> on an array whose values represent the sum of the rows of a submatrix.
                    <br><br>
                    Time Complexity: O(n<sup>2</sup> * m)<br>
                    Space Complexity: O(m) <br>
                    Where n is the number of columns and m is the number of rows
                </div>


                <div class="algorithm">
                <pre class="brush: java">
public class MaximumSubmatrix {

    public static void main(String[] args) {

        int[][] matrix = new int[][]{{1, -5, -5},
                                    {1, 3, -4},
                                    {1, 3, 5},
                                    {-9, 6, 5}};

        findMaxSubmatrix(matrix);
    }

    public static void findMaxSubmatrix(int[][] matrix) {

        int rowLength = matrix.length;
        int colLength = matrix[0].length;
        int maxSum = matrix[0][0];
        int maxRowStart = 0;
        int maxRowEnd = 0;
        int maxColStart = 0;
        int maxColEnd = 0;

        for (int startCol = 0; startCol &lt; colLength; startCol++) {

            int[] rowSum = new int[rowLength];

            for (int endCol = startCol; endCol &lt; colLength; endCol++) {

                // Add up the column values for each row
                for (int row = 0; row &lt; rowLength; row++) {

                    rowSum[row] += matrix[row][endCol];
                }

                /////////////////////////////////
                // Find the maximum subarray in
                // rowSum using Kadane's algorithm
                /////////////////////////////////
                int tempMax = rowSum[0];
                int tempRowStart = 0;
                int tempRowEnd = 0;

                int curSum = rowSum[0];
                int curStart = 0;
                int curEnd = 0;

                for (int i = 1; i &lt; rowLength; i++) {

                    if (rowSum[i] > curSum + rowSum[i]) {

                        curStart = i;
                        curEnd = i;
                        curSum = rowSum[i];

                    } else {
                        curEnd = i;
                        curSum += rowSum[i];

                    }

                    if (curSum > tempMax) {

                        tempRowStart = curStart;
                        tempRowEnd = curEnd;
                        tempMax = curSum;
                    }
                }
                /////////////////////////////////

                if (tempMax > maxSum) {
                    maxSum = tempMax;
                    maxColStart = startCol;
                    maxColEnd = endCol;
                    maxRowStart = tempRowStart;
                    maxRowEnd = tempRowEnd;
                }
            }
        }

        System.out.println(
            "The maximum submatrix has a sum of " + maxSum
            + " and starts at row " + maxRowStart
            + " and colum " + maxColStart + " and ends at"
            + " row " + maxRowEnd + " and column "
            + maxColEnd);
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
