<div class="dropdown-menu drop-ask arrow-top" aria-labelledby="dropdownMenu">
    <form enctype="multipart/form-data" class="form_askquestion"  name="form_askquestion" action="<?php echo site_url();?>dashboard/form_askquestion" method="post">
        <div>
            <div><label>SUBJECT</label></div>
            <select style="color:black;" name="subject_id">
                <option selected="selected">Select a subject</option>
                <option value="1">ACT</option>
                <option value="2">SAT</option>
                <option value="3">WORLD LANGUAGE</option>
                <option value="3">SCIENCE</option>
                <option value="4">ENGLISH</option>
                <option value="5">HISTORY</option>
                <option value="6">MATH</option>
            </select>
        </div>
        <div>
            <div><label>TOPIC</label></div>
            <select style="color:black;" name="topic_id">
                <option selected="selected">Select a topic</option>
                <option value="1">writing</option>
                <option value="2">SCIENCE</option>
                <option value="3">MATH</option>
            </select>
        </div>
        <div>
            <div><label>QUESTION</label></div>
            <textarea style="color:black;" name="question" cols="15" rows="5"></textarea>
        </div>
        <div>
            <div><label>LEVEL OF DIFFICULTY</label></div>
            <input type="file" name="image" accept="image/*">
        </div>
        <div>
            <div><label>DURATION</label></div>
            <select style="color:black;" name="duration">
                <option value="week">1 Week</option>
                <option value="day">1 day</option>
                <option value="month">1 Month</option>
            </select>
        </div>
        <div>
            <div><label>LEVEL OF DIFFICULTY</label></div>
            <select style="color:black;" name="difficulty">
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
                <option value="challenging">Challenging</option>
            </select>
        </div>
        <div>
            <button style="color:black;" type="submit" >Save</button>
        </div>
    </form>
</div>

