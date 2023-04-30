<div class="blogEntry" id="quicksort3Way">
                <div class="blogTitle">
                    <h1>3- Way Partition Quicksort</h1>


                    <div class='bDate'>Date: June 5, 2016</div>
                </div>

                <div class="blogText">


            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class Quicksort3Way {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        quicksort3Way(numbers, 0, numbers.length - 1);
        print(numbers);
    }

    public static void quicksort3Way(int[] array,
                                     int start, int end) {

        if (start &lt; end) {

            int left = start;
            int mid = start;
            int right = end;

            int random =
                 (int) (Math.random() * (end - start)) + start;
            swap(array, start, random);
            int pivot = array[start];

            while (mid &lt;= right) {

                if (array[mid] &lt; pivot) {

                    swap(array, mid, left);
                    mid++;
                    left++;

                } else if (array[mid] > pivot) {

                    swap(array, mid, right);
                    right--;

                } else {
                    mid++;
                }
            }

            quicksort3Way(array, start, left - 1);
            quicksort3Way(array, left + 1, end);
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
