<div class="blogEntry" id="insertionSort">
                <div class="blogTitle">
                    <h1>Insertion Sort</h1>


                    <div class='bDate'>Date: May 24, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Insertion_sort" target="_blank">Insertion sort</a> works by inserting the current element into its position within the section of the array that has already been sorted (ie. 0 to i). This algorithm is stable, in-place, adaptive, and online. An online algorithm is one that can start processing its input without having the entire input available from the start (eg. streaming data). A sorting algorithm is adaptive if it can take advantage of the original ordering of the input (eg. the algorithm runs faster if the array is somewhat sorted already).
                    <br><br>
                    Time Complexity: O(n<sup>2</sup>)<br>
                    Space Complexity: O(1)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class InsertionSort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        insertionSort(numbers);
        print(numbers);
    }

    public static void insertionSort(int[] array) {

        for (int i = 1; i &lt; array.length; i++) {

            int element = array[i];
            int j;

            for (j = i - 1; j >= 0 && array[j] > element; j--) {

                array[j + 1] = array[j];
            }

            array[j + 1] = element;
        }
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
