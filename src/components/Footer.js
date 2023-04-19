import PagesAnimation from './PagesAnimation';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLinkedin, faGithub ,faTwitter } from '@fortawesome/free-brands-svg-icons'





const Footer = () => {
    return (
    <PagesAnimation>
        <div className="Footer">
            <ul>
                <li> 
                    <a href="https://linkedin.com/in/Gytguz" className='icon-linkedin' target="_blank" rel="noreferrer">
                        <FontAwesomeIcon icon={ faLinkedin }/>
                    </a>
                </li>
                <li> 
                    <a href="https://github.com/Gytguz" className='icon-github' target="_blank" rel="noreferrer">
                        <FontAwesomeIcon icon={ faGithub }/>
                    </a>
                </li>
                <li> 
                    <a href="https://twitter.com/Gytguz" className='icon-linkedin' target="_blank" rel="noreferrer">
                        <FontAwesomeIcon icon={ faTwitter }/>
                    </a>
                </li>
            </ul>
        </div>
    </PagesAnimation>
    )
}

export default Footer;