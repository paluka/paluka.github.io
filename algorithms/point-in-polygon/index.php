<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for checking if a point lies within a polygon">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="pointInPolygon">
                <div class="blogTitle">
                    <h1>Checking if a Point Lies Within a Polygon</h1>


                    <div class='bDate'>Date: May 10, 2016</div>
                </div>


                <div class="blogText">
                    To determine if a point lies within a polygon (point-in-polygon problem), one can employ the crossing number algorithm, also known as the even-odd rule algorithm. Starting at the point, cast an infinite ray in any fixed direction and count the number of times that the ray intersects with the polygon. If the number of intersections is odd, then the point is inside the polygon. If the number of intersections is even, then the point is outside of the polygon. A few caveats: the algorithm does not work if the point resides on an edge of the polygon, nor does it always work for self-intersecting polygons (complex polygons).

                    <br><br>
                    To determine if two lines intersect, one can employ the equation of the line:<br><br>

                    <div class="center">
                    <img src="./1.png" alt="Equation" width="500">
                    <img src="./2.png" alt="Equation" width="500">
                    <img src="./3.png" alt="Equation" width="500">
                    <img src="./4.png" alt="Equation" width="400">
                        </div>
If the denominator of Scalar<sub>1</sub> and Scalar<sub>2</sub> (they are identical) is 0, then the two lines are parallel. If the denominator and numerator for the equations for Scalar<sub>1</sub> and Scalar<sub>2</sub> are 0, then the two lines are coincident. For two line segments, an intersection only occurs when Scalar<sub>1</sub> and Scalar<sub>2</sub> are between 0 and 1 inclusive.

                    <br><br>
                    To determine if a ray (infinite line) intersects a line segment, set Point<sub>3</sub> as the start of the ray and Point<sub>4</sub> as its direction. Then an intersection occurs when Scalar<sub>1</sub> is between 0 and 1 inclusive and Scalar<sub>2</sub> is bigger or equal to 0.

<br><br>References: <a href="http://paulbourke.net/geometry/pointlineplane/" target="_blank">1</a>, <a href="http://paulbourke.net/geometry/polygonmesh/" target="_blank">2</a>, <a href="http://stackoverflow.com/questions/563198/how-do-you-detect-where-two-line-segments-intersect" target="_blank">3</a>, <a href="http://stackoverflow.com/questions/14307158/how-do-you-check-for-intersection-between-a-line-segment-and-a-line-ray-emanatin" target="_blank">4</a>


                </div>

                <div class="algorithm">
                    <pre class="brush: java;">
import java.util.Scanner;

public class PointInPolygon {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int testX = in.nextInt();
        int testY = in.nextInt();
        Point testPoint = new Point (testX, testY);

        int numPoints = 6;
        Point[] points = new Point[numPoints];

        points[0] = new Point(2, 1);
        points[1] = new Point(5, 5);
        points[2] = new Point(10, 3);
        points[3] = new Point(9, 10);
        points[4] = new Point(3, 10);
        points[5] = new Point(1, 5);

        Polygon poly = new Polygon(points);
        Point rayDir = new Point(10, 7);

        boolean pInside = poly.pointInside(testPoint, rayDir);

        if (pInside) {
            System.out.println("Point is inside the polygon!");
        } else {
            System.out.println(
                "Point is NOT inside the polygon!");
        }
    }

    public static class Polygon {

        Point[] points;

        public Polygon(Point[] points) {
            this.points = points;
        }

        public boolean intersects(Point testPoint,
          Point rayDir, Point edgePoint1, Point edgePoint2) {

            float denom = (rayDir.y - testPoint.y)
                * (edgePoint2.x - edgePoint1.x)
                - (rayDir.x - testPoint.x)
                * (edgePoint2.y - edgePoint1.y);

            float edgeScalar = (rayDir.x - testPoint.x)
                * (edgePoint1.y - testPoint.y)
                - (rayDir.y - testPoint.y)
                * (edgePoint1.x - testPoint.x);

            float testScalar = (edgePoint2.x - edgePoint1.x)
                * (edgePoint1.y - testPoint.y)
                - (edgePoint2.y - edgePoint1.y)
                * (edgePoint1.x - testPoint.x);

            if (denom != 0) {

                edgeScalar /= denom;
                testScalar /= denom;

                if (edgeScalar >= 0 && edgeScalar &lt;= 1
                    && testScalar >= 0 ) {

                    Point p2p1 =
                            subtract(edgePoint2, edgePoint1);

                    Point multScalar =
                            mult(p2p1, edgeScalar);

                    Point interPoint =
                            add(edgePoint1, multScalar);

                    System.out.println("Intersection at : "
                          + interPoint.x + " " + interPoint.y);

                    return true;
                }
            }

            return false;
        }

        public boolean pointInside(Point testPoint,
        Point rayDir) {

            int length = points.length;
            Point edgePoint1 = null;
            Point edgePoint2 = null;
            int count = 0;
            boolean doesIntersect = false;


            for (int i = 0; i &lt; length; i++) {

                edgePoint1 = points[i];

                if (i == length - 1) {
                    edgePoint2 = points[0];

                } else {
                    edgePoint2 = points[i + 1];
                }

                doesIntersect = intersects(testPoint, rayDir,
                                     edgePoint1, edgePoint2);

                if (doesIntersect) {
                    count++;
                }
            }

            if (count % 2 == 0) {
                return false;
            }

            return true;
        }
    }

    public static Point mult(Point a, float b) {
        return new Point(a.x * b, a.y * b);
    }

    public static float crossProduct(Point a, Point b) {
        return (a.x * b.y) - (b.x * a.y);
    }

    public static Point subtract(Point a, Point b) {
        return new Point(a.x - b.x, a.y - b.y);
    }

    public static Point add(Point a, Point b) {
        return new Point(a.x + b.x, a.y + b.y);
    }

    public static class Point {

        float x = -1;
        float y = -1;

        public Point(float x, float y) {
            this.x = x;
            this.y = y;
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
