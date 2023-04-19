import PagesAnimation from './PagesAnimation';

const About = () => {
    return (
    <PagesAnimation>
        <div className="About">
            <h2>About me</h2>
            <p>Hi, my name is Gytis, I am a Structural Engineer currently trying to change my career path to Front-End development.</p>
            <p>I've spent the last six years designing structures, creating libraries for different kinds of softwares
                such as Autocad, Tekla and also scripts with Dynamo for Revit. But in that time, I've realized that what
                really drives me is the user's experience and automation of repetitive tasks.
            </p>
            <div>
                I believe I'll make a strong addition to your team because:
                <ul>
                    <li>I'm hard working and willing to learn something new every day;</li>
                    <li>I can work well within a team and as an individual to achieve goals;</li>
                    <li>I can manage my time effectively and am willing to be flexible to achieve the best possible outcome.</li>
                </ul>
            </div>
        </div>
    </PagesAnimation>
     );
}
 
export default About;