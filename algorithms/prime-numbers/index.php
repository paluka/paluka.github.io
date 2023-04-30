<?php include( '../../includes/meta.php'); ?>
<title>Algorithms - Erik Paluka</title>
<meta name="description" content="Algorithm for generating prime numbers.">

<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="../sh/theme.css"/>

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">


            <div class="blogEntry" id="primeNumbers">
                <div class="blogTitle">
                    <h1>Generating Prime Numbers</h1>


                    <div class='bDate'>Date: May 19, 2016</div>
                </div>

                <div class="blogText">
                    There are many ways to generate prime numbers. The naive way is to employ <a href="https://en.wikipedia.org/wiki/Trial_division" target="_blank">trial division</a>. Instead of checking if the prime number candidate is divisible by numbers up to the candidate itself, one can reduce the time complexity of this algorithm by only checking up to and including the square root of the candidate. This is because all composite numbers (non-primes) that are less than the candidate must have a factor that is less than or equal to the square root of the candidate.

                    <br><br>
<a href="https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes" target="_blank">The sieve of Eratosthenes</a> and <a href="https://en.wikipedia.org/wiki/Sieve_of_Sundaram" target="_blank">the sieve of Sundaram</a> are two better algorithms for generating prime numbers, and their implementations are shown below. For information on other prime number generation algorithms, you can check out <a href="https://en.wikipedia.org/wiki/Sieve_of_Atkin" target="_blank">the sieve of Atkin</a> and <a href="https://en.wikipedia.org/wiki/Wheel_factorization" target="_blank">wheel factorization</a>. There are also many different ways to check for primality including <a href="https://en.wikipedia.org/wiki/Miller%E2%80%93Rabin_primality_test" target="_blank">the Miller–Rabin primality test</a>, <a href="https://en.wikipedia.org/wiki/Solovay%E2%80%93Strassen_primality_test" target="_blank">the Solovay–Strassen primality test</a>, <a href="https://en.wikipedia.org/wiki/Baillie%E2%80%93PSW_primality_test" target="_blank">the Baillie–PSW primality test</a>, <a href="https://en.wikipedia.org/wiki/Fermat_primality_test" target="_blank">the Fermat (probable) primality test</a>, and <a href="https://en.wikipedia.org/wiki/AKS_primality_test" target="_blank">the AKS primality test</a>.


                </div>

                <div class="algorithm">
                <pre class="brush: java">
import java.util.Scanner;
import java.util.Arrays;

public class PrimeNumbers {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);
        int max = in.nextInt();

        calcPrimesLoop(max);
        System.out.println("");

        calcPrimesRecurse(max);
        System.out.println("");

        sieveEratosthenes(max);
        System.out.println("");

        sieveSundaram(max);
        System.out.println("");
    }

    public static void sieveSundaram(int max) {

        max = (max / 2) - 1;
        boolean[] array = new boolean[max + 1];
        Arrays.fill(array, true);

        int i = 1;
        int j = 1;

        while (j + (2 * j) &lt;= max) {

            int nonPrime = i + j + (2 * i * j);

            if (nonPrime &lt;= max) {
                array[nonPrime] = false;
            }

            if (i &lt; j) {
                i++;

            } else {
                j++;
                i = 1;
            }
        }

        System.out.print(2 + " ");

        for (int index = 1; index &lt;= max; index++) {

            if (array[index]) {
                System.out.print( ((index * 2) + 1) + " ");
            }
        }
    }

    public static void sieveEratosthenes(int max) {

        boolean[] array = new boolean[max + 1];
        Arrays.fill(array, true);

        int prime = 2;
        int counter = 2;

        while (true) {

            int nonPrime = prime * counter;

            if (nonPrime &lt;= max) {
                array[nonPrime] = false;
                counter++;

            } else {

                counter = 2;
                boolean nextPrime = false;
                int sqrt = (int) Math.sqrt(max);

                for (int i = prime + 1; i &lt;= sqrt; i++) {

                    if (array[i]) {
                        nextPrime = true;
                        prime = i;
                        break;
                    }
                }

                if (!nextPrime) {
                    break;
                }
            }
        }

        for (int i = 2; i &lt;= max; i++) {

            if (array[i]) {
                System.out.print(i + " ");
            }
        }
    }

    public static void calcPrimesLoop(int max) {

        if (max &lt; 2) {
            return;
        }

        for (int num = 2; num &lt;= max; num++) {

            boolean isPrime = true;
            int sqrt = (int) Math.sqrt(num);

            for (int div = 2; div &lt;= sqrt; div++) {

                if (num % div == 0) {
                    isPrime = false;
                }
            }

            if (isPrime) {
                System.out.print(num + " ");
            }
        }
    }

    public static void calcPrimesRecurse(int candidate) {

        if (candidate &lt; 2) {
            return;
        }

        int sqrt = (int) Math.sqrt(candidate);
        boolean isPrime = checkPrime(candidate, sqrt);

        if (isPrime) {
            System.out.print(candidate + " ");
        }

        calcPrimesRecurse(--candidate);

    }

    public static boolean checkPrime(int candidate, int divisor) {

        if (candidate == 2 || divisor &lt; 2) {
            return true;

        } else if (candidate % divisor == 0
            || candidate % 2 == 0) {

            return false;

        } else {

            divisor--;

            if (divisor >= 2) {
                return checkPrime(candidate, divisor);
            }

            return true;
        }
    }
}            </pre>
                </div>

            </div>
            <!-- End of blog post -->




        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>

    <script type="text/javascript" src="../script.js"></script>
    <script type="text/javascript" src="../sh/syntaxhighlighter.js"></script>

</body>

</html>
