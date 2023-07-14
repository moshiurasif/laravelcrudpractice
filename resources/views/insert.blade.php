
    <input type="text" name="name" id="name" placeholder="your name"><br>
<input type="text" name="roll" id="roll" placeholder="your roll"><br>
<input type="text" name="class" id="class" placeholder="your class"><br>
<button onclick="sendData()">Submit</button>

<p id="show-response"></p>

<script src={{asset('js/axios.min.js')}}></script>
<script src={{asset('js/custom.js')}}></script>