<?php
class block_feedback_form extends block_base {
    public function init() {
        $this->title = get_string('feedback_form', 'block_feedback_form');
    }
    // The PHP tag and the curly bracket for the class definition
    // will only be closed after there is another function added in the next section.




    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;

        $this->content->text   = '
        
         <form action="#" method="post">
            <label>Full-name</label><br/>
            <input type="text" name="amep_name"><br/><br/>
            
            <label>Comment</label><br/>
            <textarea  name="amep_comment" rows="4" cols="50"></textarea><br/><br/>
            
            <input type="submit" value="insert">
        </form>

        
        
        
        
        ';
        $this->content->footer = '';

        return $this->content;
    }

}