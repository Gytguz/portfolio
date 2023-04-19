import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import beamImg from '../../../public/images/simply-supported-beam.png'



const SimplySupportedBeam = () => {
  const [BeamLength, setBeamLength] = useState(3);
  const [DistributedLoad, setDistributedLoad] = useState(10);
  const result = BeamLength**2 * DistributedLoad / 8;

  
  return (
    <div className='SimplySupportedBeam'>
      <div className="ProjectsList">
        <Link to="../Projects" >
            <button className="AllButtons">Back to Projects</button> 
          </Link>
      </div>
          <h2>Calculate internal forces of simply supported beam</h2>
          <div>
            <label>Beam length in meters (l)&nbsp;</label>
            <input
              value={BeamLength}
              type="integer" 
              onChange={(ev) => setBeamLength(Number(ev.target.value))}
            />
          </div>
          <div>
            <label>Distributed load in kN/m (q)&nbsp;</label>
            <input
              value={DistributedLoad}
              type="integer"
              onChange={(ev) => setDistributedLoad(Number(ev.target.value))}     
            />
          </div>
          <img src={ beamImg } alt="beam-img" className='beam-img'/>
          <h2>Result: {result} kNm</h2>


    </div>
  )
}
export default SimplySupportedBeam