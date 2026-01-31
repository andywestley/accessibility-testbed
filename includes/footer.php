    </div> <!-- End Main Content Container -->

    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © <?php echo date("Y"); ?> Inaccessible Testbed
            <?php if (!empty($gtmId)): ?>
            | <a class="text-dark" href="<?php echo isset($basePath) ? $basePath : ''; ?>cookie_policy.php">Cookie Policy</a>
            <?php endif; ?>
            | <a class="text-dark" href="https://github.com/andywestley/accessibility-testbed">View on GitHub</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
