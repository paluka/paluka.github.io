<div class="blogEntry" id="stack2Queues">
                <div class="blogTitle">
                    <h1>Implement a Stack using Two Queues</h1>


                    <div class='bDate'>Date: June 1, 2016</div>
                </div>

                <div class="blogText">
                    There are two ways to implement a stack using two queues. The code below demonstrates the first version. For the push function, first enqueue the element in queue #2, then enqueue (move) all items from queue #1 into queue #2. Finally, switch the names of the queues. For the pop function, dequeue and return the element from queue #1.
                    <br><br>
                    For the second version, enqueue the element in queue #1 when invoking the push function. For the pop function, enqueue (move) all items from queue #1 into queue #2 except for the very last element. Dequeue and return the only element from queue #1, and then switch the names of the queues.
            </div>

    <div class="algorithm">
                <pre class="brush: java">
import java.util.Queue;
import java.util.LinkedList;
import java.util.Iterator;

public class Stack2Queues {

    static Queue&lt;Integer> queue1 = new LinkedList&lt;Integer>();
    static Queue&lt;Integer> queue2 = new LinkedList&lt;Integer>();

    public static void main(String[] args) {

        int num = 5;

        for (int i = 0; i &lt; num; i++) {
            push(i);
            System.out.println("Adding " + i);
        }

        for (int i = 0; i &lt; num; i++) {
            System.out.println("Retrieving " + pop());
        }
    }

    public static void push(int num) {

        queue2.add(num);

        Iterator&lt;Integer> iter = queue1.iterator();

        while (iter.hasNext()) {
            queue2.add(iter.next());
            iter.remove();
        }

        Queue&lt;Integer> temp = queue1;
        queue1 = queue2;
        queue2 = temp;
    }

    public static int pop() {
        return queue1.remove();
    }
}
                </pre>
    </div>
            </div>
            <!-- End of blog post -->
