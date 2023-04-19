import PagesAnimation from './PagesAnimation';


const Experience = () => {
    return ( 
    <PagesAnimation>
        <div className="Experience">
            <h2>Experience</h2>
            <div>
                <ul>
                    <li className="mainList">Construction and demolishion works in summers from 15 to 18 years of age;</li>
                    <li className="mainList">HVAC (heating, ventilation and air conditioning):
                        <ul>
                            <li className="nestedList">1 year in two HVAC specialized enterprises;</li>
                            <li className="nestedList">1.5 years working individually and having a team specializing in HVAC;</li>
                        </ul>
                    </li>
                    <li className="mainList">Structural engineering:
                        <ul>
                            <li className="nestedList">2.5 years in "Projektika" as structural engineer [2017.04 - 2019.08];</li>
                            <li className="nestedList">1.5 years in "Ekointera" as structural engineer [2019.09 - 2021.02];</li>
                            <li className="nestedListOngoing">Current workplace "ImmoCon" as structural engineer [2019.09 - ...];</li>
                        </ul>
                    </li>
                    <li className="mainList">Front-end development:
                        <ul>
                            <li className="nestedListOngoing"> [2022.09 - ...] No work experience. Currently building a portfolio with some help of Google and Youtube. Using HTML, CSS, Javascript and React.</li>
                        </ul>
                    </li>
                    <li className="educationList">Education:
                        <ul>
                            <li className="nestedList">In year [2014] finished Kaunas Jonas Basanavičius gymnasium;</li>
                            <li className="nestedList">[2014-2018] I have completed my Bachelors degree in Civil Engineering at Kaunas Technology College;</li>
                            <li className="nestedList">[2018-2019] I have completed additional studies in Civil Engineering at Kaunas University of Technology;</li>
                            <li className="nestedList">[2019-2021] I have completed my Master's degree in Structural and Building Products Engineering.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </PagesAnimation>
     );
}
 
export default Experience;