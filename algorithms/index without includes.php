<?php include( '../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm Information">

<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../includes/header.php'); ?>
        <div id="blog">

            <div class="blogEntry">
                <div class="blogTitle">
                    <h1>Computer Science Algorithms</h1>
                </div>

                <div class="blogText">
                Here are a list of problems and their algorithmic solutions that I have written in Java to help me improve my computer science skills. To improve your skills, I suggest solving these problems using only a text editor, ie. no IDE. Make sure to not use code completion or the internet. After a few attempts, come back and check the solution. I like to use Sublime Text, the Linux terminal, and GNU Make for build automation.

<br><br>References:

<ul>
    <li><a target="_blank" href="http://stackoverflow.com/">Stack Overflow</a></li>
<li><a target="_blank" href="http://codingfreak.blogspot.com/">Coding Freak</a></li>
<li><a target="_blank" href="http://www.siafoo.net/algorithm/">Siafoo</a></li>
<li><a target="_blank" href="http://learningarsenal.info/">Learning Arsenal</a></li>
<li><a target="_blank" href="http://javarevisited.blogspot.ca/">Javarevisited</a></li>
<li><a target="_blank" href="http://java67.blogspot.ca/">Java67</a></li>
<li><a target="_blank" href="http://paulbourke.net/">Paul Bourke</a></li>
<li><a target="_blank" href="http://introcs.cs.princeton.edu/">Princeton University: Introduction to Programming in Java</a></li>
<li><a target="_blank" href="http://www.geeksforgeeks.org/">GeeksforGeeks</a></li>
<li><a target="_blank" href="https://www.javacodegeeks.com">Java Code Geeks</a></li>
<li><a target="_blank" href="https://prismoskills.appspot.com/">Primo Skills</a></li>

</ul>
                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="maxSubarray">
                <div class="blogTitle">
                    <h1>Finding the Maximum Contiguous Subarray</h1>


                    <div class='bDate'>Date: May 22, 2016</div>
                </div>

                <div class="blogText">
                    To find the contiguous subarray with the largest sum (<a href="https://en.wikipedia.org/wiki/Maximum_subarray_problem" target="_blank">maximum subarray problem</a>), one can employ Kadane's algorithm. It works by scanning through the values in the array and computing the maximum subarray that ends at each index position. The current subarray will either consist of the previous subarray plus the current element, or solely the current element if its value is larger. The current subarray is then compared to the global maximum subarray.

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

            <div class="blogEntry" id="symmetricTree">
                <div class="blogTitle">
                    <h1>Determining if a Tree is Symmetric</h1>


                    <div class='bDate'>Date: May 21, 2016</div>
                </div>

                <div class="blogText">
                    This algorithm works for binary trees as well as for trees with more than two children.

                    <br><br>
                    <a href="symmetric-tree/">Click here to see the algorithm.</a>
                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="identicalTrees">
                <div class="blogTitle">
                    <h1>Determining if Two Trees are Identical</h1>


                    <div class='bDate'>Date: May 21, 2016</div>
                </div>

                <div class="blogText">
                    The algorithm presented here is suited for trees in general (ie. it works for non-binary trees as well).

<br><br>
                    <a href="identical-trees/">Click here to see the algorithm.</a>
                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="greedy">
                <div class="blogTitle">
                    <h1>Highest Profit from Stock using Greedy Algorithm</h1>


                    <div class='bDate'>Date: May 20, 2016</div>
                </div>

                <div class="blogText">
                    The naive approach to finding the highest potential profit from buying and selling stock is to use a double for loop where each stock price is compared against all other stock prices to find the highest difference. The better method is to employ a <a href="https://en.wikipedia.org/wiki/Greedy_algorithm" target="_blank">greedy algorithm</a> that makes a locally optimal choice. This reduces the time complexity from quadratic to linear: O(n).

                </div>

                <div class="algorithm">
                <pre class="brush: java">
public class Greedy {

    public static void main(String[] args) {

        int[] stock = new int[]{30, 25, 27, 32, 31, 29};

        highestProfit(stock);
    }

    public static void highestProfit(int[] stock) {

        if (stock == null || stock.length == 0
            || stock.length == 1) {

            return;
        }

        int profit = stock[1] - stock[0];
        int min = stock[0];

        for (int i = 1; i &lt; stock.length; i++) {

            int tempProfit = stock[i] - min;

            profit = Math.max(profit, tempProfit);

            min = Math.min(min, stock[i]);
        }

        System.out.println("Highest profit would be $" + profit);
    }
}
                </pre>
                </div>

            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="primeNumbers">
                <div class="blogTitle">
                    <h1>Generating Prime Numbers</h1>


                    <div class='bDate'>Date: May 19, 2016</div>
                </div>

                <div class="blogText">
                    There are many ways to generate prime numbers. The naive way is to employ <a href="https://en.wikipedia.org/wiki/Trial_division" target="_blank">trial division</a>. Instead of checking if the prime number candidate is divisible by numbers up to the candidate itself, one can reduce the time complexity of this algorithm by only checking up to and including the square root of the candidate. This is because all composite numbers (non-primes) that are less than the candidate must have a factor that is less than or equal to the square root of the candidate.

                    <br><br>
<a href="https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes" target="_blank">The sieve of Eratosthenes</a> and <a href="https://en.wikipedia.org/wiki/Sieve_of_Sundaram" target="_blank">the sieve of Sundaram</a> are two better algorithms for generating prime numbers, and their implementations are shown on another page.

<br><br>
                    <a href="prime-numbers/">Click here to see the algorithms.</a>
                </div>
            </div>
            <!-- End of blog post -->


            <div class="blogEntry" id="fibonacci">
                <div class="blogTitle">
                    <h1>Calculate a Fibonacci Number</h1>


                    <div class='bDate'>Date: May 18, 2016</div>
                </div>

                <div class="blogText">
                    To reduce the time complexity of this algorithm, I have employed a technique called <a href="https://en.wikipedia.org/wiki/Memoization" target="_blank">memoization</a> that is based on caching and retrieving the results of expensive function calls.
                    <br><br>
                    Time Complexity Without Memoization: O(2<sup>n</sup>)<br>
                    Space Complexity: O(n)
                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.Scanner;

public class Fibonacci {

    static long[] memoization;

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);
        int num = in.nextInt();
        memoization = new long[num + 1];

        long result = findFibonacci(num);

        System.out.print("Fibonacci for number: ");
        System.out.println(num + " = "  + result);
    }

    public static long findFibonacci(int num) {

        if (num &lt;= 0) {
            return 0;

        } else {

            long fib = memoization[num];

            if (fib == 0) {

                if (num == 1) {
                    memoization[num] = 1;

                } else {
                    memoization[num] = findFibonacci(num - 1)
                                    + findFibonacci(num - 2);
                }

                fib = memoization[num];
            }

            return fib;
        }
    }
}
                </pre>
                </div>

            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="palindrome">
                <div class="blogTitle">
                    <h1>Determine if a String is a Palindrome</h1>


                    <div class='bDate'>Date: May 17, 2016</div>
                </div>

                <div class="blogText">
                    This algorithm works by checking the equality of the ends of the string and if they match, then it removes both of those characters and calls the function again (recursion) with the rest of the string.
                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.Scanner;

public class Palindrome {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in).useDelimiter("\\n");
        String test = in.next();

        System.out.print("Is \"" + test + "\" a palindrome? ");
        System.out.println(isPalindrome(test));
    }

     public static boolean isPalindrome(String str) {

        if (str == null || str.length() == 0) {
            return false;

        } else if (str.length() == 1) {
            return true;

        } else if (str.charAt(0) == str.charAt(str.length() - 1)) {

            str = str.substring(1, str.length() - 1);

            if (str.length() > 0) {
                return isPalindrome(str);
            }

            return true;
        }

        return false;
    }
}
                </pre>
                </div>

            </div>
            <!-- End of blog post -->


            <div class="blogEntry" id="factorial">
                <div class="blogTitle">
                    <h1>Find the Factorial of a Number</h1>


                    <div class='bDate'>Date: May 17, 2016</div>
                </div>

                <div class="blogText">
                Time Complexity: O(n) when multiplication is an O(1) operation. This is incorrect since as the index tends towards infinity, the time complexity of multiplying two numbers of arbitrary length is not O(1). Three famous multiplication algorithms include <a href="https://en.wikipedia.org/wiki/Karatsuba_algorithm" target="_blank">the Karatsuba algorithm</a>, <a href="https://en.wikipedia.org/wiki/Toom%E2%80%93Cook_multiplication" target="_blank">Toom–Cook multiplication</a>, and <a href="https://en.wikipedia.org/wiki/Sch%C3%B6nhage%E2%80%93Strassen_algorithm" target="_blank">the Schönhage–Strassen algorithm</a>.
                </div>

                <div class="algorithm">
                <pre class="brush: java">
public class Factorial {

    public static void main(String[] args) {

        int num = 6;
        long iter = factorialIter(num);
        long recurse = factorialRecurse(num);

        System.out.println(iter + " " + recurse);
    }

    public static long factorialIter(long num) {

        if (num == 0 || num == 1) {
            return 1;
        }

        long factorial = 1;

        for (int i = 2; i &lt;= num; i++) {
            factorial *= i;
        }

        return factorial;
    }

    public static long factorialRecurse(long num) {

        if (num == 0 || num == 1) {
            return 1;
        }

        return num * factorialRecurse(num - 1);
    }
}
                </pre>
                </div>

            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="treeTraversal">
                <div class="blogTitle">
                    <h1>Tree Traversal</h1>


                    <div class='bDate'>Date: May 17, 2016</div>
                </div>


                <div class="blogText">


                    <br><br>
                    <a href="tree-traversal/">Click here to see the algorithms.</a>

                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="swapInts">
                <div class="blogTitle">
                    <h1>Swapping Two Numbers Without Temporary Variable</h1>


                    <div class='bDate'>Date: May 15, 2016</div>
                </div>

                <div class="blogText">
                    Here are three different ways to swap two numbers without using a temporary variable. One makes use of addition and subtraction, another make use of multiplication and division, and the third employs the bitwise XOR operator. Caveats: the multiplication/division method does not work when one of the numbers equals 0, and both arithmetic methods might cause arithmetic overflow if the numbers are too large.


                </div>

                <div class="algorithm">
                <pre class="brush: java">
public class Swap {

    public static void main(String[] args) {

        int a = 5, b = 10;
        System.out.println("a = " + a + " : b = " + b);

        swapFirst(a, b);
        swapSecond(a, b);
        swapThird(a, b);

    }

    public static void swapFirst(int a, int b) {

        a = a + b; // 5 + 10 = 15
        b = a - b; // 15 - 10 = 5
        a = a - b; // 15 - 5 = 10

        System.out.println("a = " + a + " : b = " + b);
    }

    public static void swapSecond(int a, int b) {

        a = a * b; // 5 * 10 = 50
        b = a / b; // 50 / 10 = 5
        a = a / b; // 50 / 5 = 10

        System.out.println("a = " + a + " : b = " + b);
    }

    public static void swapThird(int a, int b) {

        a = a ^ b; // 00000101 ^ 00001010 = 00001111 = 15
        b = a ^ b; // 00001111 ^ 00001010 = 00000101 = 5
        a = a ^ b; // 00001111 ^ 00000101 = 00001010 = 10

        System.out.println("a = " + a + " : b = " + b);
    }
}
                </pre>
                </div>

            </div>


            <div class="blogEntry" id="stringPermutation">
                <div class="blogTitle">
                    <h1>Generating All Permutations of a Given String</h1>


                    <div class='bDate'>Date: May 15, 2016</div>
                </div>

                <div class="blogText">
                    In this algorithm, each permutation of the original string is created by employing a for loop as well as recursion. For each permutation, the algorithm appends the current character from str onto the prefix string. This character is then removed from str and the permute function is called with the new string values. When the length of str equals 0, then the prefix string represents a valid permutation. One caveat: this algorithm does not take repeated characters into account.

                    <br><br>
Time complexity: O(n!)


                </div>

                <div class="algorithm">
                <pre class="brush: java">
public class Permutation {

    public static void main(String[] args) {
        permute("apple");
    }

    public static void permute(String str) {
        permute("", str);
    }

    public static void permute(String prefix, String str) {
        int length = str.length();

        if (length == 0) {
            System.out.println(prefix);
        } else {

            for (int i = 0; i &lt; length; i++) {

                String newPrefix = prefix + str.charAt(i);
                String newStr = str.substring(0, i)
                                + str.substring(i + 1);
                permute(newPrefix, newStr);
            }
        }
    }
}
                </pre>
                </div>

            </div>


            <!-- End of blog post -->
            <div class="blogEntry" id="binarySearch">
                <div class="blogTitle">
                    <h1>Binary Search Algorithm</h1>


                    <div class='bDate'>Date: May 14, 2016</div>
                </div>

                <div class="blogText">
                    For the binary search algorithm to work, the array being searched must already be sorted in ascending order. To find the target element, the algorithm compares the element located in the middle of the array to the target. If the element is greater than the target, the upper half of the array is eliminated from the search, and the process repeats. If the element if less than the target, then the lower half of the array is eliminated. This process repeats until the target has been found or the search subarray no longer has any elements in it.

                    <br><br>
                    Time Complexity: O(log(n))
                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.Arrays;

public class BinarySearch {

    public static void main(String[] args) {

        int[] nums = new int[]{5, 9, 2, 4, 15, 22, 3, 1};
        int searchFor = 9;
        Arrays.sort(nums);

        int index1 = Arrays.binarySearch(nums, searchFor);

        if (index1 > -1) {
            System.out.println("Found " + searchFor
                    + " at index " + index1);
        }

        int index2 = binarySearch(nums, searchFor);

        if (index2 > -1) {
            System.out.println("Found " + searchFor
                    + " at index " + index2);
        }
    }

    public static int binarySearch(int[] array, int target) {
        return binarySearch(array, target, 0, array.length);
    }

    // Start index is inclusive
    // End index is exclusive
    public static int binarySearch(
                int[] array, int target, int start, int end) {

        if (start &lt; 0 || end > array.length || start >= end
            || array[start] > target
            || array[end - 1] &lt; target) {

            return -1;
        }

        while (true) {

            int middle = (int) Math.floor((start + end) / 2.0F);

            if (array[middle] == target) {
                return middle;

            } else if (array[middle] > target) {
                end = middle;

            } else if (array[middle] &lt; target) {
                start = middle + 1;
            }

            if (start >= end) {
                return -1;
            }
        }
    }
}
                </pre>
                </div>

            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="reverseWords">
                <div class="blogTitle">
                    <h1>Reversing the Words in a String</h1>


                    <div class='bDate'>Date: May 11, 2016</div>
                </div>


                <div class="algorithm">
                <pre class="brush: java">
import java.util.List;
import java.util.ArrayList;

public class ReverseWords {

    public static void main(String[] args) {

        String sentence = "This is a sentence";
        reverseWithSplit(sentence);
        reverseWithoutSplit(sentence);
    }

    public static void reverseWithSplit(String sentence) {

        String[] words = sentence.split("\\s");
        StringBuilder sBuilder = new StringBuilder(sentence.length());

        for (int i = words.length - 1; i >= 0; i--) {
            sBuilder.append(words[i]);

            if (i > 0) {
                sBuilder.append(" ");
            }
        }

        System.out.println(sBuilder.toString());
    }

    public static void reverseWithoutSplit(String sentence) {

        StringBuilder sBuilder = new StringBuilder(sentence.length());
        List&lt;String> wordsArray = new ArrayList&lt;String>();
        int prevSpace = 0;

        for (int i = 0; i &lt; sentence.length(); i++) {

            String charString = sentence.substring(i, i + 1);

            if (charString.matches("\\s")) {
                wordsArray.add(sentence.substring(prevSpace, i));
                prevSpace = i + 1;

            } else if (i == sentence.length() - 1) {
                wordsArray.add(sentence.substring(prevSpace, i + 1));
            }
        }

        for (int i = wordsArray.size() - 1; i >= 0; i--) {

            sBuilder.append(wordsArray.get(i));

            if (i > 0) {
                sBuilder.append(" ");
            }
        }

        System.out.println(sBuilder.toString());
    }
}
                </pre>
                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="pointInPolygon">
                <div class="blogTitle">
                    <h1>Checking if a Point Lies Within a Polygon</h1>


                    <div class='bDate'>Date: May 10, 2016</div>
                </div>


                <div class="blogText">
                    To determine if a point lies within a polygon (point-in-polygon problem), one can employ the crossing number algorithm, also known as the even-odd rule algorithm. Starting at the point, cast an infinite ray in any fixed direction and count the number of times that the ray intersects with the polygon. If the number of intersections is odd, then the point is inside the polygon. If the number of intersections is even, then the point is outside of the polygon. A few caveats: the algorithm does not work if the point resides on an edge of the polygon, nor does it always work for self-intersecting polygons (complex polygons).

                    <br><br>
                    <a href="point-in-polygon/">Click here to see the algorithms.</a>

                </div>
            </div>
            <!-- End of blog post -->


            <div class="blogEntry" id="duplicateArray">
                <div class="blogTitle">
                    <h1>Checking Array for Duplicate Elements</h1>


                    <div class='bDate'>Date: May 9, 2016</div>
                </div>


                <div class="blogText">
                    The naive algorithm O(n<sup>2</sup>) is to use a double for loop to check for duplicates. A better approach is to sort the array using Quicksort or Merge Sort, which have an average time complexity of O(nlog(n)), and then compare consecutive locations in the array (lines 13-20).
                    <br><br>
                    Another way in Java is to make use of the Set interface, which models the mathematical set abstraction. Since a set cannot contain duplicate elements, one can add all of the array's elements to the Set and check its size. If its size differs from the array's length, then the array has duplicate elements (lines 22-27). Also, if you add an element to the Set one at a time, the Set will return false if the Set already contains the element (lines 29-36).

                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.Arrays;
import java.util.HashSet;
import java.util.List;
import java.util.Iterator;

public class Duplicates {

    public static void main(String[] args) {

        Integer[] array = new Integer[]{1, 6, 3, 4, 2, 4, 5};
        int length = array.length;

        Arrays.sort(array);

        for (int i = 0; i &lt; length - 1; i++) {

            if (array[i] == array[i + 1]) {
                System.out.println("Duplicate found");
            }
        }

        List&lt;Integer> list = Arrays.asList(array);
        HashSet&lt;Integer> set = new HashSet&lt;Integer>(list);

        if (set.size() != length) {
            System.out.println("Duplicate found");
        }

        HashSet&lt;Integer> set2 = new HashSet&lt;Integer>(length);

        for (Integer num : array) {

            if (!set2.add(num)) {
                System.out.println("Duplicate found");
            }
        }
    }
}
                </pre>
                </div>
            </div>
            <!-- End of blog post -->


            <div class="blogEntry" id="cycleDetection">
                <div class="blogTitle">
                    <h1>Detecting a Loop in Singly Linked List</h1>


                    <div class='bDate'>Date: May 8, 2016</div>
                </div>


                <div class="blogText">
                    <span class="bold">Floyd's Cycle Detection Algorithm</span> (The Tortoise and The Hare) and <span class="bold">Brent's Cycle Detection Algorithm</span> (The Teleporting Turtle) are two famous algorithms that solve this problem. Both make use of two pointers that travel through the list at different speeds. If there is a loop/cycle, then the faster moving pointer (the hare) will eventually lap the slower moving pointer (the tortoise). Therefore, when both the hare and the tortoise point to the same node, then a loop/cycle has been detected. Otherwise, if the hare reaches the end of the list, then there is no loop/cycle.

                    <br><br>
                    <a href="cycle-detection/">Click here to see the algorithms.</a>

                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="removeNode">
                <div class="blogTitle">
                    <h1>Remove Node From Position p in a Singly Linked List</h1>


                    <div class='bDate'>Date: May 8, 2016</div>
                </div>


                <div class="blogText">
                    <a href="remove-node/">Click here to see the algorithms.</a>

                </div>
            </div>
            <!-- End of blog post -->

            <div class="blogEntry" id="reverseList">
                <div class="blogTitle">
                    <h1>Reversing a Singly Linked List</h1>


                    <div class='bDate'>Date: May 7, 2016</div>
                </div>

                <div class="algorithm">
                <pre class="brush: java">
public void reverseList(LinkedList list) {

    if (list.head == null) {
        return;
    } else {

        Node cur = list.head;
        Node newHead = null;

        while (true) {

            if (cur == null) {
                break;
            }

            Node temp = newHead;
            newHead = cur;
            cur = cur.next;
            newHead.next = temp;
        }

        list.tail = list.head;
        list.head = newHead;
    }
}
                </pre>
</div>
                <div class="blogText">

Time Complexity: O(n)<br>
Space Complexity: O(1)
                </div>
</div>

             <div class="blogEntry" id="extractBits">
                <div class="blogTitle">
                    <h1>Extract n Bits Between Bits i and j</h1>


                    <div class='bDate'>Date: May 7, 2016</div>
                </div>

                <div class="algorithm">
                <pre class="brush: java; highlight: [11, 15, 16];">
public class ExtractBits {

    public static void main(String[] args) {

        int num = 0b11101000;

        int i = 2;
        int j = 6;
        int n = j - i; // = 6 - 2 = 4

        int mask = (1 &lt;&lt; n) - 1; // = 10000 - 1 = 01111

        System.out.println(Integer.toBinaryString(num));

        num = num >>> i; // = 11101000 >>> 2 = 111010
        num = num & mask; // = 111010 & 01111 = 1010

        System.out.println(Integer.toBinaryString(num));
    }
}
                </pre>
</div>

                <div class="blogText">
                    <ol>
                        <li>This algorithm will extract n bits from a binary number starting at i (exclusive) and ending at j (inclusive).</li>
                    <li>To drop the least significant bits before and including i, use the unsigned right shift operator (line 15).</li>

                     <li>To isolate the remaining n bits, you need to create a bitmask of n 1s (line 11). To do this, use the left shift operator to left shift a 1 n times. This will result in a 1 followed by n 0s. Subtracting 1 from it will give you what you need.</li>

                     <li>Finally, perform a bitwise AND operation with the bitmask and the number (line 16).</li>
                        </ol>

                </div>
</div>

            <div class="blogEntry" id="isolateBit">
                <div class="blogTitle">
                    <h1>Isolate Last Bit</h1>


                    <div class='bDate'>Date: May 7, 2016</div>
                </div>

                <div class="algorithm">
                <pre class="brush: java; highlight: [11];">
import java.util.Scanner;

public class IsolateBit {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int num = in.nextInt();

        System.out.println(Integer.toBinaryString(num));

        num = num & ~(num - 1);

        System.out.println(Integer.toBinaryString(num));
    }
}
                </pre>
</div>

                <div class="blogText">
                    <span class="bold">Example using binary number 11001100:</span><br>
                    <ol><li>11001100 minus 1 = 11001011</li>
                    <li>The bitwise complement of 11001011 = 00110100</li>
                        <li>Performing the bitwise AND operator on 00110100 and the original number (11001100) = 00000100</li></ol>

                </div>
</div>

            <div class="blogEntry" id="unsetBit">
                <div class="blogTitle">
                    <h1>Unset Last Bit</h1>


                    <div class='bDate'>Date: May 7, 2016</div>
                </div>

                <div class="algorithm">
                <pre class="brush: java; highlight: [11];">
import java.util.Scanner;

public class UnsetBit {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int num = in.nextInt();

        System.out.println(Integer.toBinaryString(num));

        num = num & (num - 1);

        System.out.println(Integer.toBinaryString(num));
    }
}
                </pre>
</div>

                <div class="blogText">
                    <span class="bold">Example using binary number 11001100:</span><br>
                    <ol><li>11001100 minus 1 = 11001011</li>
                    <li>Performing the bitwise AND operator on 11001011 and the original number (11001100) = 11001000</li>
                        </ol>

                </div>
</div>



        </div>
        <?php include( 'linkBar.php'); ?>
        <?php include( '../includes/footer.php'); ?>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="sh/syntaxhighlighter.js"></script>

</body>

</html>