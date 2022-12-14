    <div class="content content-main">

        <aside>
            <div class="return">
            <a href="?page=index">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/> </svg>   
            </a>
            </div>
            <h1>Challenge list</h1>
            <a href="?page=main&challenge=challenge-00" class="item-select">00-DEFAULT...</a>
            <a href="?page=main&challenge=challenge-00">01-BASEBALL GAME...</a>
            <a href="?page=main&challenge=challenge-00">02-OTHER GAME...</a>
        </aside>

        <article>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>         
            </a>
            <h1>Baseball Game</h1>
            <p id="description">
                You are keeping score for a baseball game with strange rules. The game consists of several rounds
                where the scores of past rounds may affect future rounds' scores.
                At the beginning of the game, you start with an empty record. You are given a list of strings ops,
                where ops[i] is the ith operation you must apply to the record and is one of the following:
                
                An integer x - Record a new score of x.
                '+' - Record a new score that is the sum of the previous two scores. It is guaranteed there will
                always be two previous scores.
                'D' - Record a new score that is double the previous score. It is guaranteed there will always be a
                previous score.
                'C' - Invalidate the previous score, removing it from the record. It is guaranteed there will
                always, be a previous score.
                
                Return the sum of all the scores on the record.
            </p>

            <h2>Example(s):</h2>
            <div id="exemple">
                <div id="exemple_1">
                    <h3>Exemple 1:</h3>
                    <p>Input: ops = ['5','2','C','D','+']</p>
                    <p>Output: 30</p>
                    <p></p>
                    <p>Explanation:",</p>
                    <p>'5' - Add 5 to the record, record is now [5].</p>
                    <p>'2' - Add 2 to the record, record is now [5, 2].</p>
                    <p>'C' - Invalidate and remove the previous score, record is now [5].</p>
                    <p>'D' - Add 2 * 5 = 10 to the record, record is now [5, 10].</p>
                    <p>'+' - Add 5 + 10 = 15 to the record, record is now [5, 10, 15].</p>
                    <p>"The total sum is 5 + 10 + 15 = 30</p>
                </div>
                <div id="exemple_2">
                    <h3>Exemple 2:</h3>
                    <p>Input: ops = ['1']</p>
                    <p>Output: 1</p>
                    <p></p>
                    <p>Constraints:</p>
                    <p>1 <= ops.length <= 1000</p>
                    <p>ops[i] is 'C', 'D', '+', or a string representing an integer in the range [-3 * 104, 3 * 104].</p>
                    <p>For operation '+', there will always be at least two previous scores on the record.</p>
                    <p>For operations 'C' and 'D', there will always be at least one previous score on the record.</p>
                </div>

            </div>

        </article>
    
    </div>