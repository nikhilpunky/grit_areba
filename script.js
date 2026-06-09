/**
 * The Grit Project - Web Interactions & Animations Script
 * Designed for Areebah Fatima Memon
 */

document.addEventListener('DOMContentLoaded', () => {
  // Initialize elements
  initNavigation();
  initMobileMenu();
  initRSVPModal();
  initStoryCarousel();
  initResourcesLibrary();
  initJournalFilter();
  initJoinPage();
});

/**
 * Navigation Bar Scroll & Active Link Spy Logic (Updated for Multi-page)
 */
function initNavigation() {
  const header = document.querySelector('.header-nav');
  const navLinks = document.querySelectorAll('.nav-links .nav-item a');

  // Sticky header trigger
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Multi-page Active Nav Highlighting
  const path = window.location.pathname;
  const currentPage = path.substring(path.lastIndexOf('/') + 1) || 'index.html';

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage) {
      link.style.color = 'var(--color-torch-orange)';
      link.parentElement.classList.add('active');
    } else {
      link.parentElement.classList.remove('active');
    }
  });
}

/**
 * Mobile Navigation Drawer Toggle
 */
function initMobileMenu() {
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const navLinksList = document.querySelector('.nav-links');
  const navItems = document.querySelectorAll('.nav-item a');

  if (!mobileMenuBtn || !navLinksList) return;

  mobileMenuBtn.addEventListener('click', () => {
    navLinksList.classList.toggle('active');
    // Toggle burger icon text
    mobileMenuBtn.innerHTML = navLinksList.classList.contains('active') ? '✕' : '☰';
  });

  // Close menu when a link is clicked
  navItems.forEach(item => {
    item.addEventListener('click', () => {
      navLinksList.classList.remove('active');
      mobileMenuBtn.innerHTML = '☰';
    });
  });
}

/**
 * Interactive RSVP Modal with WhatsApp Integration
 */
function initRSVPModal() {
  const rsvpOverlay = document.getElementById('rsvp-modal-overlay');
  const closeBtn = document.querySelector('.modal-close-btn');
  const rsvpButtons = document.querySelectorAll('.trigger-rsvp');
  const rsvpForm = document.getElementById('rsvp-form');
  const rsvpFormModal = document.getElementById('rsvp-form-modal');

  // Shared submit helper
  const handleRSVPSubmit = (name, phone, city, role, container) => {
    // Construct dynamic WhatsApp link
    const text = `Hey Areebah! I want to join the next Grit Project Meetup.%0A%0A*Name:* ${name}%0A*City:* ${city}%0A*WhatsApp:* ${phone}%0A*Role/Idea:* ${role}%0A%0AI'm under 30 and ready to build. Please send me the venue details!`;
    const waLink = `https://wa.me/917378692885?text=${text}`;
    
    // Visual feedback inside form container
    container.innerHTML = `
      <div style="text-align: center; padding: 2rem 0; color: var(--color-black);">
        <span style="font-size: 4rem; display: block; margin-bottom: 1rem;">🔥</span>
        <h2 style="font-family: var(--font-display); font-size: 2.8rem; line-height: 1; margin-bottom: 1rem; text-transform: uppercase;">You are in the arena!</h2>
        <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--color-gray-dark); margin-bottom: 2rem;">
          Redirecting to WhatsApp to connect with Areebah Fatima Memon and secure your RSVP...
        </p>
        <a href="${waLink}" target="_blank" class="btn btn-primary" style="display: inline-block; width: 100%;">Continue to WhatsApp</a>
      </div>
    `;
    
    // Redirect after 1.5 seconds
    setTimeout(() => {
      window.open(waLink, '_blank');
    }, 1500);
  };

  // Form submission & WhatsApp redirection for join page form
  if (rsvpForm) {
    rsvpForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('rsvp-name').value;
      const phone = document.getElementById('rsvp-phone').value;
      const city = document.getElementById('rsvp-city').value;
      const role = document.getElementById('rsvp-role').value;
      handleRSVPSubmit(name, phone, city, role, rsvpForm.parentElement);
    });
  }

  if (!rsvpOverlay) return;

  // Open modal triggers (if modal overlay exists on the page)
  rsvpButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      
      // Auto-select city if clicked from city card
      const modalCitySelect = document.getElementById('rsvp-modal-city');
      const targetCity = button.getAttribute('data-city');
      if (modalCitySelect && targetCity) {
        modalCitySelect.value = targetCity;
      }
      
      rsvpOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  // Close modal
  const closeModal = () => {
    rsvpOverlay.classList.remove('active');
    document.body.style.overflow = '';
  };

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  rsvpOverlay.addEventListener('click', (e) => {
    if (e.target === rsvpOverlay) closeModal();
  });

  // Form submission & WhatsApp redirection for modal form
  if (rsvpFormModal) {
    rsvpFormModal.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('rsvp-modal-name').value;
      const phone = document.getElementById('rsvp-modal-phone').value;
      const city = document.getElementById('rsvp-modal-city').value;
      const role = document.getElementById('rsvp-modal-role').value;
      handleRSVPSubmit(name, phone, city, role, rsvpFormModal.parentElement);
    });
  }
}

/**
 * Stories Carousel Navigation (Safely ignored if not present)
 */
function initStoryCarousel() {
  const track = document.querySelector('.stories-track');
  const prevBtn = document.querySelector('.stories-prev');
  const nextBtn = document.querySelector('.stories-next');

  if (!track || !prevBtn || !nextBtn) return;

  nextBtn.addEventListener('click', () => {
    const cardWidth = track.querySelector('.story-card').offsetWidth;
    const gap = parseInt(window.getComputedStyle(track).gap) || 0;
    track.scrollBy({ left: cardWidth + gap, behavior: 'smooth' });
  });

  prevBtn.addEventListener('click', () => {
    const cardWidth = track.querySelector('.story-card').offsetWidth;
    const gap = parseInt(window.getComputedStyle(track).gap) || 0;
    track.scrollBy({ left: -(cardWidth + gap), behavior: 'smooth' });
  });
}

/**
 * Free Resources Library Gate & Unlock
 */
function initResourcesLibrary() {
  const resourceOverlay = document.getElementById('resource-modal-overlay');
  const resourceForm = document.getElementById('resource-form');
  const resourceButtons = document.querySelectorAll('.trigger-resource');
  let activeResourceTitle = '';
  let activeResourceLink = '';

  if (!resourceOverlay || !resourceForm) return;

  const closeBtn = resourceOverlay.querySelector('.modal-close-btn');

  // Trigger modal when clicking a resource card button
  resourceButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      activeResourceTitle = btn.getAttribute('data-resource-title');
      activeResourceLink = btn.getAttribute('data-resource-link') || '#';
      
      // Update modal heading
      const resourceHeading = document.getElementById('resource-modal-title');
      if (resourceHeading) {
        resourceHeading.textContent = `Unlock: ${activeResourceTitle}`;
      }

      resourceOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  // Close modal helper
  const closeModal = () => {
    resourceOverlay.classList.remove('active');
    document.body.style.overflow = '';
  };

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  resourceOverlay.addEventListener('click', (e) => {
    if (e.target === resourceOverlay) closeModal();
  });

  // Handle resource email form submission
  resourceForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('resource-email').value;
    const name = document.getElementById('resource-name').value;

    // Simulate saving contact and unlocking resource
    const modalContent = resourceOverlay.querySelector('.modal-card');
    modalContent.innerHTML = `
      <div style="text-align: center; padding: 2rem 0;">
        <span style="font-size: 4.5rem; display: block; margin-bottom: 1rem;">🔓</span>
        <h2 style="font-family: var(--font-display); font-size: 2.8rem; line-height: 1; margin-bottom: 1rem;">Resource Unlocked</h2>
        <p style="font-family: var(--font-body); font-size: 1rem; color: var(--color-gray-dark); margin-bottom: 2rem;">
          Thanks ${name}! Click below to immediately read/download your copy of <strong>${activeResourceTitle}</strong>.
        </p>
        <a href="${activeResourceLink}" target="_blank" class="btn btn-primary" id="final-download-btn" style="display: inline-block; width: 100%;">Access Blueprint</a>
      </div>
    `;

    // Handle closing after download click
    const finalBtn = document.getElementById('final-download-btn');
    if (finalBtn) {
      finalBtn.addEventListener('click', () => {
        setTimeout(closeModal, 1000);
      });
    }
  });
}

/**
 * Journal Categories Filtering Tabs (Safely ignored if not present)
 */
function initJournalFilter() {
  const tabs = document.querySelectorAll('.journal-tab-btn');
  const cards = document.querySelectorAll('.journal-card');

  if (tabs.length === 0 || cards.length === 0) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const filter = tab.getAttribute('data-filter');

      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = 'flex';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transition = 'opacity 0.3s ease';
          }, 50);
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/**
 * Join Page helper (preselects values from URL parameters)
 */
function initJoinPage() {
  const urlParams = new URLSearchParams(window.location.search);
  const cityParam = urlParams.get('city');
  if (cityParam) {
    const rsvpCity = document.getElementById('rsvp-city');
    if (rsvpCity) {
      rsvpCity.value = cityParam;
    }
  }
}
