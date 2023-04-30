<div class="blogEntry" id="towerHanoi">
                <div class="blogTitle">
                    <h1>The Tower of Hanoi</h1>


                    <div class='bDate'>Date: May 31, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Tower_of_Hanoi" target="_blank">The Tower of Hanoi</a> is a classic problem that shows the power of recursion. The correct solution invovles 2<sup>n</sup> - 1 moves where n is the number of disks.
                    <br><br>
                    Time Complexity: O(2<sup>n</sup>)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class TowerHanoi {

    static int numMoves = 0;

    public static void main(String[] args) {

        int numDisks = 10;
        solveTowerHanoi(numDisks, "A", "B", "C");
        System.out.println(
                    "Number of moves: " + numMoves);
    }

    public static void solveTowerHanoi(int numDisks,
        String start, String auxiliary, String end) {

        numMoves++;

        if (numDisks == 1) {
            System.out.println(start + " to " + end);

        } else if (numDisks > 1) {

             solveTowerHanoi(
                numDisks - 1, start, end, auxiliary);

             System.out.println(start + " to " + end);

             solveTowerHanoi(
                numDisks - 1, auxiliary, start, end);
        } else {

            throw new IllegalArgumentException(
                "Number of disks must be larger than 0!");
        }
    }
}
                </pre>
    </div>
            </div>
            <!-- End of blog post -->
