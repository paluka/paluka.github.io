<div class="blogEntry" id="shellSort">
                <div class="blogTitle">
                    <h1>Shell Sort</h1>


                    <div class='bDate'>Date: May 27, 2016</div>
                </div>

                <div class="blogText">
                    <a href="https://en.wikipedia.org/wiki/Shell_sort" target="_blank">Shell sort</a> works by sorting elements that are a certain distance (gap) apart by employing insertion sort, and then iteratively reducing the gap over time. This algorithm is adaptive, but not stable. The time complexity of the algorithm heavily depends on the size of the gap. Three popular gap sequences are Shell (floor(n/2<sup>k</sup>)), Pratt (2<sup>p</sup>3<sup>q</sup>), and Knuth ((3<sup>k</sup> - 1) / 2). For a gap sequence that may be optimal for your needs, check out <a href="http://dx.doi.org/10.1007/3-540-44669-9_12" target="_blank">Ciura's paper</a>.
                    <br><br>
                    Shell Time Complexity: O(n<sup>2</sup>)<br>
                    Pratt Time Complexity: O(n log<sup>2</sup>(n))<br>
                    Knuth Time Complexity: O(n<sup>3/2</sup>) &mdash; Best<br>
                    Space Complexity: O(1)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class ShellSort {

    public static void main(String[] args) {

        int[] numbers = new int[]{5, 7, 3, 9, 2, 10, 4, 1, 6, 8};
        print(numbers);
        shellSort(numbers);
        print(numbers);
    }

    public static void shellSort(int[] array) {

        int gap = 1;

        while (gap &lt; array.length / 3) {
            gap = gap * 3 + 1;
        }

        while (gap > 0) {

            for (int i = gap; i &lt; array.length; i++) {

                int element = array[i];
                int j;

                for (j = i - gap; j >= 0 && array[j] > element;
                                                    j -= gap) {
                    array[j + gap] = array[j];
                }

                array[j + gap] = element;
            }

            gap /= 3;
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
