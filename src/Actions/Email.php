<?php

namespace HTML_Forms\Actions;

use HTML_Forms\Form;
use HTML_Forms\Submission;

class Email extends Action {

   public $type = 'email';
   public $label = 'Send Email';

   public function __construct() {
       $this->label = __( 'Send Email', 'html-forms' );
   }

   public function page_settings( $settings ) {
       $defaults = array_fill_keys( array( 'from', 'to', 'subject', 'message' ), '' );
       $settings = array_merge( $defaults, $settings );
       ?>
       <input type="hidden" name="form[settings][actions][0][type]" value="<?php echo $this->type; ?>" />
       <table class="form-table">
           <tr>
               <th><?php echo __( 'From', 'html-forms' ); ?></th>
               <td>
                   <input name="form[settings][actions][0][from]" value="<?php echo esc_attr( $settings['from'] ); ?>" type="text" class="regular-text" placeholder="jane@email.com" required />
               </td>
           </tr>
           <tr>
               <th><?php echo __( 'To', 'html-forms' ); ?></th>
               <td>
                   <input name="form[settings][actions][0][to]" value="<?php echo esc_attr( $settings['to'] ); ?>" type="text" class="regular-text" placeholder="john@email.com" required />
               </td>
           </tr>
           <tr>
               <th><?php echo __( 'Subject', 'html-forms' ); ?></th>
               <td>
                   <input name="form[settings][actions][0][subject]" value="<?php echo esc_attr( $settings['subject'] ); ?>" type="text" class="regular-text" placeholder="Your email subject" />
               </td>
           </tr>
           <tr>
               <th><?php echo __( 'Message', 'html-forms' ); ?></th>
               <td>
                   <textarea name="form[settings][actions][0][message]" rows="8" class="widefat" placeholder="Your email message" required><?php echo esc_textarea( $settings['message'] ); ?></textarea>
                    <p class="help">You can use the following variables: <span class="hf-field-names"></span></p>
               </td>
           </tr>
       </table>
        <?php
   }

    /**
     * Processes this action
     *
     * @param array $settings
     * @param Submission $submission
     * @param Form $form
     */
   public function process( array $settings, Submission $submission, Form $form ) {
       $to = hf_template( $settings['to'], $submission->data );
       $subject = hf_template( $settings['subject'], $submission->data );
       $message = nl2br( hf_template( $settings['message'], $submission->data ) );
       $from = hf_template( $settings['from'], $submission->data );

       $headers = array( 'Content-Type: text/html; charset=UTF-8', sprintf( 'From: %s', $from ) );

       wp_mail( $to, $subject, $message, $headers );
   }
}