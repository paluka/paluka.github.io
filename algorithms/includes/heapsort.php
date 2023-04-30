<div class="blogEntry" id="heapsort">
                <div class="blogTitle">
                    <h1>Heapsort</h1>


                    <div class='bDate'>Date: June 1, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Heapsort" target="_blank">Heapsort</a> is similar to selection sort, but has a faster performance since it uses the properties of a <a href="https://en.wikipedia.org/wiki/Binary_heap" target="_blank"> binary heap</a> to quickly find the required element. Heapsort is an in-place algorithm, but it is not stable.
                    <br><br>
                    Time Complexity: O(n log(n)) for best, average &amp; worst case
                    <br>
                    Space Complexity: O(1)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class Heapsort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        heapsort(numbers);
        print(numbers);
    }

    public static void heapsort(int[] array) {

        int lastIndex = array.length - 1;

        // Heapify
        for (int i = lastIndex / 2; i >= 0; i--) {

            sink(array, i, lastIndex);
        }

        // Sortdown
        for (int i = lastIndex; i > 0; i--) {

            swap(array, 0, i);
            sink(array, 0, i - 1);
        }
    }

    public static void sink(int[] array,
                            int parent, int lastIndex) {

        int leftChild = parent * 2;
        int rightChild = parent * 2 + 1;
        int max = parent;

        if (leftChild &lt;= lastIndex
                      && array[leftChild] > array[max]) {

            max = leftChild;
        }

        if (rightChild &lt;= lastIndex
                       && array[rightChild] > array[max]) {

            max = rightChild;
        }

        if (max != parent) {

            swap(array, parent, max);
            sink(array, max, lastIndex);
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
