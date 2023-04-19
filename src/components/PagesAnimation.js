import { motion } from 'framer-motion'
import React from 'react'

const PageAnimations = {
    initial: {opacity:0},
    animate: {opacity:1},
    exit: {opacity:0},
}

const PagesAnimation = ({children}) => {
  return (
    <motion.div variants={PageAnimations} initial="initial" animate="animate" exit="exit" transition={{duration: 0.25}}>
        {children}
    </motion.div>
  )
}

export default PagesAnimation