import PagesAnimation from './PagesAnimation'
import React, { useRef } from 'react';
import emailjs from '@emailjs/browser';

const Contact = () => {

    const userName = useRef('');
    const userEmail = useRef('');
    const userMessage = useRef('');
    const form = useRef();
    const sendEmail = (e) => {
    e.preventDefault();

    emailjs.sendForm('service_r1iue5k', 'template_5iray65', form.current, 'MUoT-qIXKffXtxNa0')
      .then((result) => {
          console.log(result.text);
          console.log("Message Sent!")
      }, (error) => {
          console.log(error.text);
      });
    //   reset all fields
      userName.current.value = ''
      userEmail.current.value = ''
      userMessage.current.value = ''
  };

    return (
    <PagesAnimation>
            <form ref={form} onSubmit={sendEmail} className="Contact">
                <h2>Contact me</h2>
                <label>Name</label>
                <input type="text" placeholder="Your Name" name = "user_name" ref={userName}/>
                <label>Email</label>
                <input type="text" placeholder="Your Email" name="user_email" ref={userEmail} />
                <label>Message</label>
                <textarea placeholder="Your Message" name="message" ref={userMessage} />
                <button className="ContactMe">Send</button>
                {/* <button className="Contact" type="submit">Send</button> */}
            </form>
    </PagesAnimation>
    );
}

export default Contact;