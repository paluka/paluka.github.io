<div class="blogEntry" id="quicksortDP">
                <div class="blogTitle">
                    <h1>Dual-Pivot Quicksort</h1>


                    <div class='bDate'>Date: June 3, 2016</div>
                </div>

                <div class="blogText">
                    Instead of employing only a single pivot as seen in the classical <a href="https://en.wikipedia.org/wiki/Quicksort" target="_blank">quicksort</a>, this version makes use of two pivots. It was brought to light by <a href="http://permalink.gmane.org/gmane.comp.java.openjdk.core-libs.devel/2628" target="_blank">Vladimir Yaroslavskiy in 2009</a> and has a better overall performance when compared to three-way quicksort, and the classical single pivot quicksort. For information on a three pivot variant, see <a href="http://dx.doi.org/10.1137/1.9781611973198.6" target="_blank">this paper</a>. The following image demonstrates the partitioning of the array where P1 and P2 are the pivots and P1 &lt;= P2.
                    <br><br>
<img src="../img/algorithms/quicksort-dual-pivot.png" width="500">

            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class QuicksortDualPivot {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        sort(numbers, 0, numbers.length - 1);
        print(numbers);
    }

    public static void sort(int[] array, int start, int end) {

        if (start &lt; end) {

            if (array[start] > array[end]) {
                swap(array, start, end);
            }

            int lessThan = start + 1;
            int mid = start + 1;
            int greaterThan = end - 1;

            while (mid &lt;= greaterThan) {

                if (array[mid] &lt; array[start]) {

                    swap(array, mid, lessThan);
                    lessThan++;
                    mid++;

                } else if (array[mid] > array[end]) {

                    swap(array, mid, greaterThan);
                    greaterThan--;


                } else {

                    mid++;
                }
            }

            swap(array, start, --lessThan);
            swap(array, end, ++greaterThan);

            sort(array, start, lessThan - 1);
            sort(array, lessThan + 1, greaterThan - 1);
            sort(array, greaterThan + 1, end);
        }
    }

    public static void swap(int[] array, int i, int j) {

        int temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }

    public static void print(int[] array) {

        for (int num : array) {
            System.out.print(num + " ");
        }

        System.out.println("");
    }
}
                </pre>
    </div>
            </div>
            <!-- End of blog post -->
