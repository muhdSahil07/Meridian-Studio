<?php get_header(); ?>

<main class="site-main" style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
    <p style="font-family: var(--font-mono); font-size: 14px; text-transform: uppercase; color: var(--color-clay); letter-spacing: 1px;">Inquiries</p>
    <h1 style="font-family: var(--font-display); font-size: 42px; color: var(--color-ink); margin: 10px 0 30px;">Let's work together.</h1>
    
    <div style="margin-bottom: 50px;">
        <p style="font-family: var(--font-body); font-size: 18px; color: var(--color-stone); line-height: 1.6; margin-bottom: 20px;">
            Have a project in mind or just want to say hello? Drop us a line and we'll get back to you within 48 hours.
        </p>
        <a href="mailto:hello@meridianstudio.com" style="font-family: var(--font-mono); font-size: 20px; color: var(--color-ink); text-decoration: none; border-bottom: 1px solid var(--color-ink); padding-bottom: 5px;">
            hello@meridianstudio.com
        </a>
    </div>

    <!-- സിംപിൾ കോൺടാക്റ്റ് ഫോം ലേഔട്ട് -->
    <form style="display: flex; flex-direction: column; gap: 20px; border-top: 1px solid #76726A; padding-top: 40px;">
        <div>
            <label style="display: block; font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; margin-bottom: 8px; color: var(--color-clay);">Name</label>
            <input type="text" style="width: 100%; padding: 12px; border: 1px solid #76726A; background: transparent; font-family: var(--font-body);" placeholder="Your name">
        </div>
        <div>
            <label style="display: block; font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; margin-bottom: 8px; color: var(--color-clay);">Email</label>
            <input type="email" style="width: 100%; padding: 12px; border: 1px solid #76726A; background: transparent; font-family: var(--font-body);" placeholder="Your email address">
        </div>
        <div>
            <label style="display: block; font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; margin-bottom: 8px; color: var(--color-clay);">Message</label>
            <textarea rows="5" style="width: 100%; padding: 12px; border: 1px solid #76726A; background: transparent; font-family: var(--font-body);" placeholder="Tell us about your project"></textarea>
        </div>
        <div>
            <button type="submit" style="background: var(--color-ink); color: #FFF; border: none; padding: 15px 30px; font-family: var(--font-mono); text-transform: uppercase; font-size: 13px; cursor: pointer; letter-spacing: 1px;">Send Message</button>
        </div>
    </form>
</main>

<?php get_footer(); ?>