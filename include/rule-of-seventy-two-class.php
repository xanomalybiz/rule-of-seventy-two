<?php

class Rule_Of_Seventy_Two_Calculator extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		parent::__construct(
			'Rule_Of_Seventy_Two_Calculator_Widget', // Base ID
			__( 'Rule Of Seventy Two Calculator Widget', 'rsc_domain' ), // Name
			array( 'description' => __( 'Widget lets Calculate Rule of Seventy Two', 'text_domain' ), ) // Args
		);
	}


	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		
		echo $args['before_widget'];
		echo $args['before_title'];
		if(!empty($instance['title']))
		{
			echo $instance['title'];
		}
		echo $args['after_title'];				
		?>
     		<h2>The Rule Of 72</h2>
            <br>
        	<h3>How Long Will It Take For Your Investment to Double?</h3>
            
            <form id="calculator-form" method="post" action="<?php echo plugins_url().'/rule-of-seventy-two/include/rule-of-seventy-two-calculator.php';?>">
            <div class="form-group">
            	<label for="interest">Enter Your Investment's Interest Rate: </label><br>
                <input type="text" id="interest" name="interest" class="form-control" required>
          		 <div id="forme-msg"></div>
          		<div id="calc_submit">
               		 <input type="submit"  class="btn btn-primary" name="suscriber_submit" value="Calculate">
                </div>
            </div>
            </form>
          <a id="findOutMore" href="americaiseasy.com/blog"> <p> To find out more about the rule of 72, personal finance and building wealth -  click here	</p></a>
           <a id="subscribe-xanomaly-link" href="http://xanomaly.com"> <h4>Powered by <span id="logo"><span id="homeBannerLogoX" class="xFont">X</span><span id="secondHalfLogo">anomaly</span> </span></h4></a>
		<br>
        	
        <?php
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		
	
	}
	

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved

	}
}
?>