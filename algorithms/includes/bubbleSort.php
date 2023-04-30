<div class="blogEntry" id="bubbleSort">
                <div class="blogTitle">
                    <h1>Bubble Sort</h1>


                    <div class='bDate'>Date: May 24, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Bubble_sort" target="_blank">Bubble sort</a> is a stable sort, therefore input order is preserved for elements with equal keys. It is also an in-place sort meaning that sorting is done within the original array/list. It works by moving through the list and swapping adjacent elements if they are in the wrong order. Below are two versions of bubble sort with bubbleSortBetter having a lower computational complexity since one less element is needed to be compared after each iteration.
                    <br><br>
                    Time Complexity: O(n<sup>2</sup>)<br>
                    Space Complexity: O(1)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class BubbleSort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        bubbleSort(numbers);
        print(numbers);

        numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        bubbleSortBetter(numbers);
        print(numbers);
    }

    public static void bubbleSort(int[] array) {

        boolean flag = true;

        while (flag) {

            flag = false;

            for (int i = 0; i &lt; array.length - 1; i++) {

                int j = i + 1;

                if (array[i] > array[j]) {

                    swap(i, j, array);
                    flag = true;
                }
            }
        }
    }

    public static void bubbleSortBetter(int[] array) {

        for (int i = 0; i &lt; array.length; i++) {

            boolean flag = false;

            for (int j = array.length - 1; j > i; j--) {

                if (array[j] &lt; array[j-1]) {
                    swap(j, j - 1, array);
                    flag = true;
                }
            }

            if (!flag) {
                break;
            }
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
