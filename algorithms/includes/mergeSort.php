<div class="blogEntry" id="mergeSort">
                <div class="blogTitle">
                    <h1>Merge Sort</h1>


                    <div class='bDate'>Date: June 1, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Merge_sort" target="_blank">Merge Sort</a> is a divide and conquer algorithm that was invented by the talented John von Neumann in 1945. It is a stable sort and does not require random access to data. Therefore, it is great for sorting linked lists.
                    <br><br>
                    Time Complexity: O(n log(n)) for best, average &amp; worst case
                    <br>
                    Space Complexity: O(n)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class MergeSort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        mergeSort(numbers);
        print(numbers);
    }

    public static void mergeSort(int[] array) {
        mergeSort(array, 0, array.length - 1);
    }

    public static void mergeSort(int[] array, int start, int end) {

        if (start &lt; end) {

            int middle = (start + end) / 2;

            mergeSort(array, start, middle);
            mergeSort(array, middle + 1, end);

            merge(array, start, middle, end);
        }
    }

    public static void merge(int[] array,
                             int start, int middle, int end) {

        int length = middle + 1;
        int[] copyArray = new int[length];
        System.arraycopy(array, 0, copyArray, 0, length);

        int i = start;
        int j = middle + 1;
        int k = start;

        while (i &lt;= middle && j &lt;= end) {
            array[k++] = (array[j] &lt; copyArray[i])
                                   ? array[j++] : copyArray[i++];
        }

        while (i &lt;= middle) {
            array[k++] = copyArray[i++];
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
