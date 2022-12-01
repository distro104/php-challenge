<div class="menutop">
        <ul>
            <li><a href="#"></a></li>
        </ul>
    </div>
    
    <div class="content content-main">

        <aside>
            <p class="return"><a href="?page=index">Back...</a></p>
            <h1>Challenge list</h1>
            <a href="?page=main&challenge=challenge-00">00-DESCRIPT LINK...</a>
            <a href="?page=main&challenge=challenge-00">00-DESCRIPT LINK...</a>
            <a href="?page=main&challenge=challenge-00">00-DESCRIPT LINK...</a>
        </aside>

        <article>
            <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>         
        </a>
            <h1 id="title">
                Baseball Game
            </h1>
            <p id="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type 
            specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 
            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
            recently with desktop publishing software like Aldus PageMaker including versions of 
            Lorem Ipsum. 
            </p>

            <h2>Example:</h2>
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