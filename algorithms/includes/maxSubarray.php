<div class="blogEntry" id="maxSubarray">
                <div class="blogTitle">
                    <h1>Finding the Maximum Contiguous Subarray</h1>


                    <div class='bDate'>Date: May 22, 2016</div>
                </div>

                <div class="blogText">
                    To find the contiguous subarray with the largest sum (<a href="https://en.wikipedia.org/wiki/Maximum_subarray_problem" target="_blank">maximum subarray problem</a>), one can employ <span class="bold">Kadane's algorithm</span>. It works by scanning through the values in the array and computing the maximum subarray that ends at each index position. The current subarray will either consist of the previous subarray plus the current element, or solely the current element if its value is larger. The current subarray is then compared to the global maximum subarray.

                    <br><br>
                    Time Complexity: O(n)<br>
                    Space Complexity: O(1)
                </div>

                <div class="algorithm">
                <pre class="brush: java">
public class MaximumSubarray {

    public static void main(String[] args) {

        int[] array = new int[]{-2,1,-3,4,-1,2,1,-5,4};
        findMaximumSubarray(array);
    }

    public static void findMaximumSubarray(int[] array) {

        if (array == null || array.length == 0) {

            throw new IllegalArgumentException(
                "Must provide an array with at least " +
                "one element in it");
        }

        int curStart = 0;
        int curEnd = 0;
        int curMax = array[0];

        int maxStart = 0;
        int maxEnd = 0;
        int max = array[0];

        for (int i = 1; i &lt; array.length; i++) {

            if (array[i] > curMax + array[i]) {

                curStart = i;
                curEnd = i;
                curMax = array[i];

            } else {

                curEnd = i;
                curMax += array[i];
            }

            if (curMax > max) {

                maxStart = curStart;
                maxEnd = curEnd;
                max = curMax;
            }
        }

        System.out.print("Maximum subarray with sum " + max);
        System.out.print(" starts at " + maxStart);
        System.out.println(" and ends at " + maxEnd);
    }
}
                </pre>
                </div>
            </div>
            <!-- End of blog post -->
