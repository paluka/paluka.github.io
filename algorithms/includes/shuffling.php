<div class="blogEntry" id="shuffling">
                <div class="blogTitle">
                    <h1>Shuffling <br> Generating a Random Permutation of a Finite Set</h1>


                    <div class='bDate'>Date: June 5, 2016</div>
                </div>

                <div class="blogText">
                    To properly shuffle or permute an array, each permutation must have an equal chance of happening. The <a href="https://en.wikipedia.org/wiki/Fisher%E2%80%93Yates_shuffle" target="_blank">Fisher–Yates shuffle</a>, aka the Knuth shuffle, algorithm successfully do so. Remember, when shuffling, there are n! ways to arrange the elements in a set.

                    <br><br>
                    Time Complexity: O(n)
            </div>

    <div class="algorithm">
                <pre class="brush: java">
public class Shuffling {

    public static void main(String[] args) {

        int[] numbers = new int[]{1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
        print(numbers);
        shuffle(numbers);
        print(numbers);
    }

    public static void shuffle(int[] array) {

        for (int i = 0; i &lt; array.length - 1; i++) {

            int random =
                  (int) (Math.random() * (array.length - i)) + i;
            swap(array, i, random);
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
