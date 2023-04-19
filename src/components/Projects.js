import React from 'react';
import PagesAnimation from './PagesAnimation';
import { Link } from 'react-router-dom';
import Button from './Button';


const Projects = () => {
    return (
    <PagesAnimation>
        <div className="Projects">
            <h1>Projects :</h1>
            <ul className='ProjectsList'>
                <li><Link to="../MyProjects/SimplySupportedBeam/SimplySupportedBeam">
                        <button className="AllButtons">Simply supported beam</button>
                    </Link>
                </li>
                {/* <li><Link to="../MyProjects/2nd project">
                        <button className="AllButtons">2nd project</button>
                    </Link>
                </li>
                <Button label="Learn more" /> */}
            </ul>
        </div>
    </PagesAnimation>
    )
}

export default Projects;