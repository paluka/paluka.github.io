<div class="blogEntry" id="quicksort">
                <div class="blogTitle">
                    <h1>Quicksort</h1>


                    <div class='bDate'>Date: June 3, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Quicksort" target="_blank">Quicksort</a> is a divide-and-conquer algorithm that sorts in-place. It is one of the most popular sorting algorithms, but it is not stable. It centers on selecting a pivot and moving smaller elements to its left, and moving larger elements to its right. Quicksort is then called recursively on these two subarrays.
                    <br><br>
                    Best &amp; Average Time Complexity: O(n log(n))
                    <br>
                    Worst Time Complexity: O(n<sup>2</sup>)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class Quicksort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        quicksort(numbers, 0, numbers.length - 1);
        print(numbers);
    }

    public static void quicksort(int[] array, int start, int end) {

        if (start &lt; end) {

            int pivot = partition(array, start, end);
            quicksort(array, start, pivot - 1);
            quicksort(array, pivot + 1, end);
        }
    }

    public static int partition(int[] array, int start, int end) {

        // Select random pivot
        int random = (int) (Math.random() * (end - start)) + start;
        swap(array, start, random);
        int pivot = array[start];

        int left = start + 1;
        int right = end;

        while (true) {

            while (left &lt;= right && array[left] &lt;= pivot) {
                left++;
            }

            while (right >= left && array[right] >= pivot) {
                right--;
            }

            if (left &lt;= right) {
                swap(array, left, right);

            } else {
                break;
            }
        }

        swap(array, start, right);

        return right;
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
