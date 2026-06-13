import { useState, useEffect, useCallback } from 'react';
import { createPortal } from 'react-dom';
import BlurText from './BlurText.jsx';

/**
 * Metadata for each banner slide's text content.
 * Each entry defines the text parts for the headline
 * and the styling class to apply.
 */
const slideTexts = [
  {
    id: 0,
    parts: [
      { text: 'Embun', className: 'block text-5xl sm:text-6xl lg:text-8xl font-bold text-white font-[\'Playfair_Display\'] leading-[1.1] mb-2 text-shadow-lg' },
      { text: 'Sangga Langit', className: 'block text-4xl sm:text-5xl lg:text-7xl font-bold font-[\'Playfair_Display\'] leading-[1.1] bg-gradient-to-r from-emerald-300 via-amber-200 to-emerald-300 bg-clip-text text-transparent bg-[length:200%_auto] text-shadow-lg hero-shimmer' },
    ],
    delay: 80,
  },
  {
    id: 1,
    parts: [
      { text: 'Destinasi Glamping', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold text-white font-[\'Playfair_Display\'] leading-tight text-shadow-lg' },
      { text: 'Terlengkap di Kuningan', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold font-[\'Playfair_Display\'] leading-tight text-teal-300 text-shadow-lg' },
    ],
    delay: 80,
  },
  {
    id: 2,
    parts: [
      { text: 'Makan Malam di', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold text-white font-[\'Playfair_Display\'] leading-tight text-shadow-lg' },
      { text: 'Antara Awan & Hutan', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold font-[\'Playfair_Display\'] leading-tight text-amber-300 text-shadow-lg' },
    ],
    delay: 80,
  },
  {
    id: 3,
    parts: [
      { text: 'Petualangan', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold text-white font-[\'Playfair_Display\'] leading-tight text-shadow-lg' },
      { text: 'di Atas Awan', className: 'block text-4xl sm:text-5xl lg:text-6xl font-bold font-[\'Playfair_Display\'] leading-tight text-sky-300 text-shadow-lg' },
    ],
    delay: 80,
  },
];

function App() {
  // Track which slide is currently active
  const [activeSlide, setActiveSlide] = useState(0);
  // Wait for loading screen to finish before rendering
  const [isReady, setIsReady] = useState(false);

  useEffect(() => {
    const timer = setTimeout(() => setIsReady(true), 4200);
    return () => clearTimeout(timer);
  }, []);

  // Listen for slide changes from the hero slideshow JS
  const handleSlideChange = useCallback((e) => {
    const index = e.detail.index;
    if (index === undefined || index === null) return;
    setActiveSlide(index);
  }, []);

  useEffect(() => {
    const hero = document.getElementById('hero');
    if (!hero) return;

    hero.addEventListener('slide-changed', handleSlideChange);
    return () => hero.removeEventListener('slide-changed', handleSlideChange);
  }, [handleSlideChange]);

  // Only render when loading screen has disappeared
  if (!isReady) return null;

  /** Render each slide's BlurText components into its respective DOM slot.
   *  Only the active slide gets play=true to trigger the blur-in animation.
   *  Inactive slides render but stay in initial (hidden) state. */
  const portals = slideTexts.map((slide) => {
    const slot = document.querySelector(`.react-headline-slot[data-slide-headline="${slide.id}"]`);
    if (!slot) return null;

    const isActive = slide.id === activeSlide;

    return createPortal(
      <div key={slide.id}>
        {slide.parts.map((part, i) => (
          <BlurText
            key={`${slide.id}-${i}`}
            text={part.text}
            delay={slide.delay}
            animateBy="words"
            direction="top"
            className={part.className}
            stepDuration={0.4}
            play={isActive}
          />
        ))}
      </div>,
      slot
    );
  });

  return portals;
}

export default App;
