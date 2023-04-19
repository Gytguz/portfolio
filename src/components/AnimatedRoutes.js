import { AnimatePresence } from 'framer-motion'
import React from 'react'
import Home from './Home';
import Contact from './Contact';
import About from './About';
import Experience from './Experience';
import Projects from './Projects';
import { Route, Routes, useLocation } from 'react-router-dom';
import SimplySupportedBeam from './MyProjects/SimplySupportedBeam/SimplySupportedBeam';


const AnimatedRoutes = () => {
const location = useLocation()
  return (
    <AnimatePresence mode={ 'wait' }>
      <Routes location={location} key={location.pathname}>
        <Route exact path="/" element={<Home/>}/>
        <Route exact path="/About" element={<About/>}/>
        <Route exact path="/Experience" element={<Experience/>}/>
        <Route exact path="/Projects" element={<Projects/>}/>
        <Route exact path="/Contact" element={<Contact/>}/>
        <Route exact path="/MyProjects/SimplySupportedBeam/SimplySupportedBeam" element={<SimplySupportedBeam/>}/>
        {/* 2 elementai viename path */}
        {/* <Route exact path="/Contact" element={<><Contact/><Contactme/></>}/> */}
      </Routes>
    </AnimatePresence>
  )
}

export default AnimatedRoutes