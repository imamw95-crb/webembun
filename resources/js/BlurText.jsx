import { useEffect, useRef, useState } from 'react';

const BlurText = ({
  text = '',
  delay = 200,
  className = '',
  animateBy = 'words',
  direction = 'top',
  onAnimationComplete,
  stepDuration = 0.35,
  play = false,
}) => {
  const elements = animateBy === 'words' ? text.split(' ') : text.split('');
  const [visible, setVisible] = useState(false);
  const ref = useRef(null);

  useEffect(() => {
    // When play becomes true, trigger the CSS animation
    if (play) {
      setVisible(true);
    } else {
      setVisible(false);
    }
  }, [play]);

  // CSS custom properties for staggering
  const animDir = direction === 'top' ? 'blur-in-top' : 'blur-in-bottom';

  return (
    <p ref={ref} className={className} style={{ display: 'flex', flexWrap: 'wrap' }}>
      {elements.map((segment, index) => {
        const animDelay = (index * delay) / 1000;
        return (
          <span
            className="inline-block blur-text-word"
            key={index}
            style={{
              animation: visible
                ? `${animDir} ${stepDuration}s cubic-bezier(0.16, 1, 0.3, 1) ${animDelay}s both`
                : 'none',
              opacity: visible ? undefined : 0,
              filter: visible ? undefined : 'blur(10px)',
              transform: visible ? undefined : direction === 'top' ? 'translateY(-50px)' : 'translateY(50px)',
              willChange: 'transform, filter, opacity',
            }}
            onAnimationEnd={index === elements.length - 1 ? onAnimationComplete : undefined}
          >
            {segment === ' ' ? '\u00A0' : segment}
            {animateBy === 'words' && index < elements.length - 1 && '\u00A0'}
          </span>
        );
      })}
    </p>
  );
};

export default BlurText;
