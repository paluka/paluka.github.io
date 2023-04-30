<div class="blogEntry" id="selectionSort">
                <div class="blogTitle">
                    <h1>Selection Sort</h1>


                    <div class='bDate'>Date: May 27, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Selection_sort" target="_blank">Selection sort</a> works by finding the smallest unordered element and swapping it with the leftmost unordered element. It is an in-place algorithm, but it is not stable. It also generally performs worse than insertion sort.
                    <br><br>
                    Time Complexity: O(n<sup>2</sup>)<br>
                    Space Complexity: O(1)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class SelectionSort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        selectionSort(numbers);
        print(numbers);
    }

    public static void selectionSort(int[] array) {

        for (int i = 0; i &lt; array.length; i++) {

            int k = i;

            for (int j = i + 1; j &lt; array.length; j++) {

                if (array[j] &lt; array[k]) {
                    k = j;
                }
            }

            swap(i, k, array);
        }
    }

    public static void swap(int i, int j, int[] array) {

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
