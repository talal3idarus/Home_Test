const canvas = document.querySelector("#scene");
const body = document.body; // Reference to the body element
canvas.width = canvas.clientWidth;
canvas.height = canvas.clientHeight;
const ctx = canvas.getContext("2d");

// Adjust canvas for high-resolution displays
if (window.devicePixelRatio > 1) {
    canvas.width = canvas.clientWidth * 2;
    canvas.height = canvas.clientHeight * 2;
    ctx.scale(2, 2);
}

let width = canvas.width;
let height = canvas.height; 
let rotation = 0;
let rotationSpeed = 0.01; 
let dots = [];

// Base color for dots and hover color
const baseColor = { r: 52, g: 152, b: 219 }; // RGB for blue
const hoverColor = { r: 0, g: 255, b: 0 }; // RGB for red
const transitionSpeed = 0.1; // Speed of color transition

const DOT_RADIUS = 4;
const GLOBE_RADIUS = width * 0.7;
const PROJECTION_CENTER_x = width / 2;
const PROJECTION_CENTER_y = height / 2;
const FIELD_OF_VIEW = width * 0.8;

function createDots(numDots) {
    for (let i = 0; i < numDots; i++) {
        const lat = Math.random() * Math.PI - Math.PI / 2;
        const lon = Math.random() * 2 * Math.PI;

        const x = GLOBE_RADIUS * Math.cos(lat) * Math.cos(lon);
        const y = GLOBE_RADIUS * Math.cos(lat) * Math.sin(lon);
        const z = GLOBE_RADIUS * Math.sin(lat);

        // Initialize each dot with base color
        dots.push({ x, y, z, color: { ...baseColor } });
    }
}

function project(point) {
    const scale = FIELD_OF_VIEW / (FIELD_OF_VIEW + point.z + GLOBE_RADIUS);
    const x2D = (point.x * scale) + PROJECTION_CENTER_x;
    const y2D = (point.y * scale) + PROJECTION_CENTER_y;
    return { x: x2D, y: y2D };
}

// Interpolate color between two colors
function interpolateColor(startColor, endColor, factor) {
    return {
        r: Math.round(startColor.r + (endColor.r - startColor.r) * factor),
        g: Math.round(startColor.g + (endColor.g - startColor.g) * factor),
        b: Math.round(startColor.b + (endColor.b - startColor.b) * factor)
    };
}

function animate() {
    ctx.clearRect(0, 0, width, height);

    for (const dot of dots) {
        const rotatedX = dot.x * Math.cos(rotation) - dot.z * Math.sin(rotation);
        const rotatedZ = dot.x * Math.sin(rotation) + dot.z * Math.cos(rotation);

        const projectedPoint = project({ x: rotatedX, y: dot.y, z: rotatedZ });

        ctx.beginPath();
        ctx.arc(projectedPoint.x, projectedPoint.y, DOT_RADIUS, 0, Math.PI * 2);

        // Calculate color based on rotation speed
        let currentColor = (rotationSpeed === 0.009) ? hoverColor : baseColor; // Hover color when speed is lower
        dot.color = interpolateColor(dot.color, currentColor, transitionSpeed);

        ctx.fillStyle = `rgb(${dot.color.r}, ${dot.color.g}, ${dot.color.b})`; // Apply color
        ctx.fill();
    }

    rotation += rotationSpeed; 
    requestAnimationFrame(animate);
}

// Add event listeners for mouse enter and leave
canvas.addEventListener("mouseenter", () => {
    rotationSpeed = 0.009; // Slower rotation when hovered
    body.classList.add("hovered"); // Add class for black background
});

canvas.addEventListener("mouseleave", () => {
    rotationSpeed = 0.01; // Default rotation speed
    body.classList.remove("hovered"); // Remove class for black background
});

createDots(550); 
animate();
