--
-- Table structure for table `eleves`
--

CREATE TABLE `eleves` (
  `id` int(11) NOT NULL,
  `nom` varchar(26) DEFAULT NULL,
  `prenom` varchar(16) DEFAULT NULL,
  `classe` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `stage` int(11) NOT NULL,
  `eleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
COMMIT;