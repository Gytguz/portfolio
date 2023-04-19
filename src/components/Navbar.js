import React from 'react';
import { Link } from 'react-router-dom';
import NavbarAnimation from './NavbarAnimation';

export default function navbar() {
  return <nav className='navbar'>
    <NavbarAnimation>
        <div>
          <img src={ require('../public/images/user-icon.png')} className="user-icon" alt="oops" />
          <Link to="/" className="title">GG</Link>
        </div>
    </NavbarAnimation>
    <NavbarAnimation>
        <ul>
          {/* <li className='active'><a href="Home">Home</a></li> */}
          <li><Link to="/">Home</Link></li>
          <li><Link to="About">About</Link></li>
          <li><Link to="Experience">Experience</Link></li>
          <li><Link to="Projects">Projects</Link></li>
          <li><Link to="Contact">Contact</Link></li>
        </ul>
    </NavbarAnimation>  
      </nav>
}